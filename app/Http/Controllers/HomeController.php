<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Event $event, Carbon $carbon)
    {
        $earlybird = $event
            ->where('show_homepage', true)
            ->where('homepage_expire', '>', $carbon->now())
            ->orderBy('created_at', 'DESC')
            ->first();

        $images = new \stdClass();

        return view('pages.home', compact('earlybird', 'images'));

    }
}
