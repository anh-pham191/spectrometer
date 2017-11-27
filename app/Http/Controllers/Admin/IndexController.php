<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\TempLamb;
use App\TempMilkBiscuit;
use App\TempMilkPowder;

class IndexController extends Controller
{
    public function index()
    {
        $kiwifruits = Kiwifruit::all();
        $tempLambs = TempLamb::all();
        $tempMilkBiscuits = TempMilkBiscuit::all();
        $tempMilkPowders = TempMilkPowder::all();
        return view('pages.admin.index', [ 'kiwifruits' => $kiwifruits, 'tempLambs' => $tempLambs,
            'tempMilkBiscuits' => $tempMilkBiscuits, 'tempMilkPowders' => $tempMilkPowders
        ]);
    }
}
