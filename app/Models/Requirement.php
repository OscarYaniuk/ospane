<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{


    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'requirements';

    protected $fillable = ['name','course_id'];

    use HasFactory;

    // Relacion uno a muchos inversa
    public function Course(){
        return $this->belongsTo('App\Models\Course');
    }
}
