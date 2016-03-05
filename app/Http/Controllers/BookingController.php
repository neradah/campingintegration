<?php

namespace App\Http\Controllers;

use App\CampSite;
use App\PitchGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function step1($event)
    {
        return view('bookings.step1', compact('event'));
    }

    public function step2($event, PitchGroup $pitchGroup, CampSite $campSite)
    {
        $campSite = $campSite->find(1);
        return view('bookings.step2', compact('event', 'pitchGroup', 'campSite'));
    }

    public function step3($event, Request $request)
    {
        $keys = array_keys($request->get('products'));

        $products = \DB::table('products')
            ->whereIn('products.id', $keys)
            ->join('event_product_qty_cost', 'products.id', '=', 'event_product_qty_cost.product_id')
            ->where('event_product_qty_cost.event_id', '=', $event->id)
            ->where('event_product_qty_cost.pitch_id', '=', $request->get('pitch'))
            ->select(['event_product_qty_cost.cost', 'products.name', 'products.id'])
            ->get();

        $ProductQty = $request->get('products');

        foreach($products as $product)
        {
            $product->total = ($product->cost * $ProductQty[$product->id]);

            $product->qty = $ProductQty[$product->id];

            $productsArray[] = $product;
        }


        return view('bookings.step3', compact('productsArray', 'event'));





    }
}
