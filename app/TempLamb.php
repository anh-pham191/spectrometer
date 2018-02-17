<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempLamb extends Model
{
    protected $table = 'items';
    protected $fillable = ['name', 'excel_file', 'view_online', 'scanned_item_id'];
    public function ScannItems(){
        return $this->belongsTo('App\ScannedItem');
    }
}
