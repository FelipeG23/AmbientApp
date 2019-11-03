<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function sensors()
    {
        return $this->hasMany('App\Sensor');
    }
}
