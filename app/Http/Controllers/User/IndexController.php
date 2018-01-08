<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\ScannedItem;
use App\TempLamb;

class IndexController extends Controller
{
    public function index()
    {
        $kiwifruits = Kiwifruit::all();
        $scannedItems = ScannedItem::all();
        $tempLambs = TempLamb::all();
        return view('pages.user.index', [ 'kiwifruits' => $kiwifruits, 'scannedItems' => $scannedItems,'tempLambs' => $tempLambs
        ]);
    }
}
