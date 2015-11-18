<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Course extends Model implements SluggableInterface
{

    use SluggableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];


    /**
     * TODO
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];
}
