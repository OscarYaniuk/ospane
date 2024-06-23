<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    public const BORRADOR = 1;
    public const REVISION = 2;
    public const PUBLICADO = 3;


    public function getRatingAttribute()
    {
        return $this->reviews_count
            ? round($this->reviews->avg('rating'), 1)
            : 5;
    }


    public function getRouteKeyName()
    {
        return "slug";
    }

    // Relacion uno a muchos inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function Level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function Price()
    {
        return $this->belongsTo('App\Models\Price');
    }
    // Relacion muchos a muchos
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function requirements() // agregar  mirgration
    {
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals() // agregar  mirgration
    {
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences() // agregar  mirgration
    {
        return $this->hasMany('App\Models\Audience');
    }
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
    // Relacion uno a uno polimorfica
    public function image() // agregar  mirgration
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    public function scopeCategory($query, $category_id)
    {
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
        return $query;
    }
    public function scopeLevel($query, $level_id)
    {
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
        return $query;
    }
    // Definir la relación hasMany con Question
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
