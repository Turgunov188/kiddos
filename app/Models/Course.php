<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'lesson', 'time', 'title', 'image' 
    ];

}
