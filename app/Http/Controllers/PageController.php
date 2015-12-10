<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getHome(Event $event)
    {
        $images = new \stdClass();


        return view('pages.home', ['images' => $images]);

    }
}
