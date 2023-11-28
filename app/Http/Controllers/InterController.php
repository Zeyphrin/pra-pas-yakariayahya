<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inter;

class InterController extends Controller
{
    public static function inter() {
        return view ('inter.international', 
        ["title" => "international",
          "inter" => Inter::all()]);
    }

    public static function detail($detail) {
        return view ('inter.detail', 
        ["title" => "detail",
          "inter" => inter::find($detail)]);
    }
}
