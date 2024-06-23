<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'sections';

    protected $fillable = ['name', 'level', 'course_id'];
    use HasFactory;

    // Relacion uno a muchos inversa
    public function Course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    //Relación uno a muchos
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
    public function subsections()
    {
        return $this->hasMany(Section::class, 'son_of', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Section::class, 'son_of', 'id');
    }
    public function childSections()
    {
        return $this->hasMany(Section::class, 'son_of', 'id');
    }

    public function descendantSections()
    {
        $descendantSections = $this->childSections;
        foreach ($this->childSections as $childSection) {
            $descendantSections = $descendantSections->merge($childSection->descendantSections());
        }

        return $descendantSections;
    }

    // Definir la relación hasMany con Question
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
