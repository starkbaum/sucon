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

    /**
     * TODO
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Array to build Slugs
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * get the Keywords associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function keywords() {
        return $this->belongsToMany('App\Keyword');
    }

}
