<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensors';

    public $timestamps = true;

    public function records()
    {
        return $this->hasMany('App\Record');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
