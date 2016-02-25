<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Customer extends Model implements SluggableInterface
{
    /**
     * makes Model use the needed methods of SluggableInterface
     */
    use SluggableTrait, SearchableTrait;

    protected $table = 'customers';

    /**
     * Fields that may be mass assigned
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'city',
        'zipCode',
        'street',
        'email',
        'phoneNo'
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

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'customers.name' => 10,
        ]
    ];

    /**
     * Get the Snippets associated with the given Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function snippets()
    {
        return $this->belongsToMany('App\Snippet')->withTimestamps();
    }
}
