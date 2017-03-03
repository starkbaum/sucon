<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
    ];

    public function snippets()
    {
        return $this->belongsToMany('App\Snippet')->withTimestamps();
    }
}
