<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Definir las relaciones belongsTo
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
    // Relación con el modelo Level
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // Relación con el modelo TypeQuestion
    public function typequestion()
    {
        return $this->belongsTo(TypeQuestion::class);
    }

    // Relación con el modelo TypeQuestion
    public function categoryquestion()
    {
        return $this->belongsTo(CategoryQuestion::class);
    }
    // Relación con el modelo TypeQuestion
    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }

    // Definir los campos que son asignables masivamente
    protected $fillable = [
        'title',
        'n_question',
        'n_article',
        'type',
        'level',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'answer',
        'justificado1',
        'justificado2',
        'justificado3',
        'observation',
        'course_id',
        'section_id',
        'lesson_id',
    ];
}
