<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScannedItem extends Model
{
    protected $fillable = ['name', 'spectrometer_id', 'image'];
}
