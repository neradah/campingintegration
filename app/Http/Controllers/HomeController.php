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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Category $category, Event $event)
    {
        $carousel = $event->where('show_carousel', true)->get();
        $categories = $category->lists('name', 'id');
        $earlyBird = $event
            ->where('early_bird_start', '<',  Carbon::now()) //its started
            ->where('early_bird_end', '>', Carbon::now()) //not finised
            ->first();

        $mostRecent = $event->orderBy('created_at', 'DESC')->first();



        return view('demo_home', compact('categories', 'carousel', 'earlyBird', 'mostRecent'));
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postSearch(Category $category, Request $request)
    {
        $results = $category->findOrFail($request->get('id'))->events()->get();

        return view('demo_results', compact('results'));
    }
}
