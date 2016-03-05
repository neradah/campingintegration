<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function index(Category $category, Event $event)
    {
        $carousel = $event->where('show_carousel', true)->get();


        $categories = $category->lists('name', 'id');

        $earlyBirdFeature = $event
            ->where('early_bird_start', '<',  Carbon::now()) //its started
            ->where('early_bird_end', '>', Carbon::now()) //not finised
            ->first();

        $recentlyAdded = $event->orderBy('created_at', 'DESC')->first();



        return view('pages.home', compact('categories', 'carousel', 'earlyBirdFeature', 'recentlyAdded', 'event'));
    }

}


