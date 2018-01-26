<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\Models\User;
use App\ScannedItem;
use App\TempLamb;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $type = Auth::user()->type;

            $kiwifruits = Kiwifruit::all();
            $scannedItems = ScannedItem::where('type', $type)->get();
            $tempLambs = [];
            foreach($scannedItems as $scannedItem){
                $tempLambs[] = TempLamb::where('scanned_item_id', $scannedItem->id)->get();
            }
            return view('pages.user.index', [ 'kiwifruits' => $kiwifruits, 'scannedItems' => $scannedItems,'tempLambs' => $tempLambs
            ]);
        } else {
            return view('pages.user.index');
        }


    }
}
