<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'levels';

    protected $fillable = ['name'];

    use HasFactory;
    // Relacion uno a muchos
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
      // Relación con el modelo Question
      public function questions()
      {
          return $this->hasMany(Question::class);
      }
}
