<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\Models\User;
use App\ScannedItem;
use App\TempLamb;

class IndexController extends Controller
{
    public function index()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => 'test'
        ]);
        $kiwifruits = Kiwifruit::all();
        $scannedItems = ScannedItem::all();
        $tempLambs = TempLamb::all();
        return view('pages.user.index', [ 'kiwifruits' => $kiwifruits, 'scannedItems' => $scannedItems,'tempLambs' => $tempLambs
        ]);
    }
}
