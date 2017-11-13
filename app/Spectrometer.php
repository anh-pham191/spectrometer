<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectrometer extends Model
{
    protected $fillable = 'name';

    public function kiwifruits(){
        return $this->hasMany('App\Kiwifruit');
    }
}
