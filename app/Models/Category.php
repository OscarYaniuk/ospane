<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = true;

    protected $table = 'categories';

    protected $guarded = ['id'];

    protected $fillable = ['name'];

    use HasFactory;
    // Relacion uno a muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

}




