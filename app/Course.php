<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Course extends Model implements SluggableInterface
{
    use SluggableTrait, SearchableTrait, Likeability;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * TODO.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Array to build Slugs.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'courses.name'        => 10,
            'courses.description' => 10,
        ],
    ];
}
