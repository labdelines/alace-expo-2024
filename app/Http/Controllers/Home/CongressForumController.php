<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class CongressForumController extends Controller
{
    public function congressForum()
    {
        return view('frontend.congress-forum');
    }
}
