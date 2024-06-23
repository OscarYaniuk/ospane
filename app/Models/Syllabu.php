<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabu extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'section_id',
        'lesson_id',
        'syllabus_id',
        'activo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }



}
