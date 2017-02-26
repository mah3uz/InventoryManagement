<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Create Home Page Controller
    public function home()
    {
        return view('home');
    }

    public function product_entry(){
        return view('products.entry');
    }

    public function shipment_entry(){
        return view('shipment-form');
    }
}
