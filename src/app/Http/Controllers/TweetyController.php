<?php

namespace Laravia\Tweety\App\Http\Controllers;

use App\Http\Controllers\Controller;

class TweetyController extends Controller
{

    public function home()
    {
        return view('laravia.tweety::home');
    }

}
