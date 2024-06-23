<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeQuestion extends Model
{
    use HasFactory;

    // Relación con el modelo Question
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    protected $guarded = ['id'];


}
