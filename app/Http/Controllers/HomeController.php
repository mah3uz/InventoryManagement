<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbound;
use App\Outbound;

class HomeController extends Controller
{
    //Create Home Page Controller
    public function home()
    {
        $inbounds = Inbound::all();
        $outbounds = Outbound::all();
        return view('home', compact('inbounds', 'outbounds'));
    }

}
