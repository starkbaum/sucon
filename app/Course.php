<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * table that is used by model
     *
     * @var string
     */
    protected $table = 'courses';

    protected $fillable = ['name', 'slug', 'description'];
}
