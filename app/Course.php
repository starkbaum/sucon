<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
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

    public function comment() {
        return $this->hasManyThrough('course_has_comments', 'courseId', 'commentId');
    }
}
