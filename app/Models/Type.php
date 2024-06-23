<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];

    public $timestamps = true;

    protected $table = 'types';

    protected $fillable = ['name'];

    use HasFactory;

    // Relacion uno a muchos
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

}
