<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\National;

class NationalController extends Controller
{
    public static function national() {
        return view ('national.national', 
        ["title" => "national",
          "national" => National::all()]);
    }

    public static function detail($detail) {
        return view ('national.detail', 
        ["title" => "detail",
          "national" => national::find($detail)]);
    }

}