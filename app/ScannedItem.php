<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScannedItem extends Model
{
    protected $fillable = ['name', 'spectrometer_id', 'image'];

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
