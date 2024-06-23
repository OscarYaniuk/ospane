<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'reviews';

    protected $fillable = ['comment','rating','user_id','course_id'];

    use HasFactory;

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
