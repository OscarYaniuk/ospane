<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'n_questions' => 'required',
		'view' => 'required',
		'syllabus_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','n_questions','view','syllabus_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionsHasTests()
    {
        return $this->hasMany('App\Models\QuestionsHasTest', 'test_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function syllabu()
    {
        return $this->hasOne('App\Models\Syllabu', 'id', 'syllabus_id');
    }


}
