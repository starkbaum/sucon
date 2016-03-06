<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $table = 'persons';

    /**
     * fields that may be mass-assigned
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phoneNo',
        'customer_id'
    ];

    public function customers() {
        return $this->belongsTo('App\Customer');
    }
}
