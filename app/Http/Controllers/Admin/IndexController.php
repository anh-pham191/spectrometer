<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kiwifruit;

class IndexController extends Controller
{
    public function index()
    {
        $kiwifruits = Kiwifruit::all();
        return view('pages.admin.index', [ 'kiwifruits' => $kiwifruits
        ]);
    }
}
