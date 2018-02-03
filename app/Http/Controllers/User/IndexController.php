<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\Models\User;
use App\ScannedItem;
use App\TempLamb;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $type = $user->type;

            $kiwifruits = Kiwifruit::where('user_id', $user->id)->get();
            $scannedItems = ScannedItem::where('type', $type)->where('user_id', $user->id)->get();
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

    public function getUpload(){
        $types = Type::where('type', Type::where('name', 'MEAT')->first()->id)->get();
        return view('pages.user.upload', ['types' => $types]);
    }

    public function postUpload(Request $request){
        dd($request->all());
    }
}
