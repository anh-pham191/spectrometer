<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KiwifruitScanned extends Model
{
    protected $fillable = ['kiwifruit_id',
        'sample',
        'area',
        'scan',
        'calories',
        'carbs',
        'water'];

    public function kiwifruit(){
        return $this->belongsTo('App\Kiwifruit');
    }
}
