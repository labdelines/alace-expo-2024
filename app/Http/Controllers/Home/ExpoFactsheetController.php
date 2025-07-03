<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class ExpoFactsheetController extends Controller
{
    public function expoFactSheet()
    {
        return view('frontend.expo-fact-sheet');
    }
}
