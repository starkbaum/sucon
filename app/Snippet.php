<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Snippet extends Model implements SluggableInterface
{
    use SluggableTrait, SearchableTrait;

    /**
     * fields that may be mass-assigned.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

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
            'snippets.name'        => 10,
            'snippets.description' => 10,
        ],
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
