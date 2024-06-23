<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{

    public $timestamps = true;

    protected $table = 'audiences';

    protected $guarded = ['id'];

    protected $fillable = ['name','course_id'];



    use HasFactory;

    // Relacion uno a muchos inversa
    public function Course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
