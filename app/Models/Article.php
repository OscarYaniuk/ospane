<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function Editor()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

// Relación de uno a muchos

public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

}
