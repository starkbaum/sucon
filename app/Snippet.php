<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * fields that may be mass-assigned
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    /**
     * Array to build Slugs
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];


    public function customer()
    {
        return $this->belongsToMany('App\Customer')->withTimestamps();
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language')->withTimestamps();
    }

    public function keywords()
    {
        return $this->belongsToMany('App\Keyword')->withTimestamps();
    }

}
