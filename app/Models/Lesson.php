<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'lessons';

    protected $fillable = ['name','url','iframe','description','duration','platform_id','section_id'];


    public function getCompletedAttribute()
    {
        return $this->users->contains(auth()->user()->id);
    }

    // Relacion uno a uno
    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    // Relacion uno a muchos inversa
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }
    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }

    //relacion muchos a muchos
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


    //relacion uno a uno polimorfica

    public function resource()
    {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //relacion uno a muchos polimorfica

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

      // Definir la relación hasMany con Question
      public function questions()
      {
          return $this->hasMany(Question::class);
      }
}
