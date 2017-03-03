<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * get the Courses associated with the Keyword.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function snippets()
    {
        return $this->belongsToMany('App\Data');
    }
}
