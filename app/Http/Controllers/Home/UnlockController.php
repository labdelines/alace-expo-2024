<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class UnlockController extends Controller
{
    public function unLock()
    {
        return view('frontend.unlock');
    }
}
