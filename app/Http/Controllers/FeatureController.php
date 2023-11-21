<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public static function feature() {
        return view ('feature.feature', 
        ["title" => "feature",
          "feature" => Feature::all()]);
    }

    public static function detail($detail) {
        return view ('feature.detail', 
        ["title" => "detail",
          "feature" => Feature::find($detail)]);
    }
}