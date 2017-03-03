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
     * Fillable Data Model.
     */
    protected $fillable = [
        'name', 'author', 'path', 'size', 'extension', 'courseId', 'snippetId', 'languageId',
    ];

    public function scopeNotAccepted($query)
    {
        $query->where('is_accepted', '=', 0);
    }

    public function scopeAccepted($query)
    {
        $query->where('is_accepted', '=', 1);
    }
}
