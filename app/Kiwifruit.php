<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiwifruit extends Model
{
    protected $fillable = ['name',
        'brand',
        'purchased_in',
        'produced_in',
        'spectrometer_id'];

    public function spectrometer(){
        return $this->belongsTo('App\Spectrometer');
    }

    public function kiwifruitscanned(){
        return $this->hasMany('App\KiwifruitScanned');
    }
}
