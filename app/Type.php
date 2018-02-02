<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function scanned_item()
    {
        return $this->hasMany('App\ScannedItem');
    }
    public function kiwifruits(){
        return $this->hasMany('App\Kiwifruit');
    }


}
