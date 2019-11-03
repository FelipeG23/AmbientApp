<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';

    public $timestamps = true;

    public function sensor()
    {
        return $this->belongsTo('App\Sensor');
    }
}
