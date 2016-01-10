<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getIndex(Event $event)
    {
        $earlybird = $event
            ->where('show_homepage', true)
            ->where('homepage_expire', '>', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->first();

        $images = new \stdClass();

        return view('pages.home', compact('earlybird', 'images'));

    }

    public function postIndex(Request $request, Event $event)
    {
        $results = $event->where('catagory', $request->get('catagory'))->get();

        return view('pages.results', compact('results'));
    }


}
