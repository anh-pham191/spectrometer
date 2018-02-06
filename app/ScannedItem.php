<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScannedItem extends Model
{
    protected $fillable = ['name', 'spectrometer_id', 'image', 'user_id', 'type', 'cut_location', 'other_information'];

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
