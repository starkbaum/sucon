<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data';



    /**
     * Fillable Data Model
     */
    protected $fillable = [
        'name', 'author', 'path', 'size', 'courseId', 'languageId'
    ];

    public function keywords()
    {
        return $this->belongsToMany('App\Keyword')->withTimestamps();
    }
}
