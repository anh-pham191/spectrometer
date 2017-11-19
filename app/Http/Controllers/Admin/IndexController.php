<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kiwifruit;
use App\TempLamb;

class IndexController extends Controller
{
    public function index()
    {
        
        $kiwifruits = Kiwifruit::all();
        $tempLambs = TempLamb::all();
        return view('pages.admin.index', [ 'kiwifruits' => $kiwifruits, 'tempLambs' => $tempLambs
        ]);
    }
}
