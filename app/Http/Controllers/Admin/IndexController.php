<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\ScannedItem;
use App\TempLamb;
use App\TempMilkBiscuit;
use App\TempMilkPowder;

class IndexController extends Controller
{
    public function index()
    {
        $kiwifruits = Kiwifruit::all();
        $scannedItems = ScannedItem::all();
        $tempLambs = TempLamb::all();
        return view('pages.admin.index', [ 'kiwifruits' => $kiwifruits, 'scannedItems' => $scannedItems,'tempLambs' => $tempLambs
        ]);
    }
}
