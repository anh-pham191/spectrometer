<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempLamb extends Model
{
    protected $fillable = ['name', 'excel_file', 'view_online', 'scanned_item_id'];
}
