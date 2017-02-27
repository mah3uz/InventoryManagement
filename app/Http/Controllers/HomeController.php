<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbound;

class HomeController extends Controller
{
    //Create Home Page Controller
    public function home()
    {
        $inbounds = Inbound::all();
        return view('home', compact('inbounds'));
    }

}
