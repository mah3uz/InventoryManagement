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

        $total_records = array();

        while ($inbounds->isNotEmpty() && $outbounds->isNotEmpty()) {
            $inbound = $inbounds->first();
            $outbound = $outbounds->first();

            if ($inbound->created_at < $outbound->created_at) {
                $total_records[] = $inbounds->shift();
            } else {
                $total_records[] = $outbounds->shift();
            }
        }

        $inbounds->each(function($item) {
            $total_records[] = $item;
        });

        $outbounds->each(function($item) {
            $total_records[] = $item;
        });

        return view('home', compact('total_records'));
    }

}
