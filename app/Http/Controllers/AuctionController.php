<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
     public function add()
    {
        return view('add');
    }  
}
