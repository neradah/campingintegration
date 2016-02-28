<?php


function get_event_product_cost($pitchId, $productId, $eventId)
{
    $dbProduct = DB::table('event_product_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('event_id', $eventId)
        ->where('product_id', $productId)
        ->pluck('cost');


    return $dbProduct;
}


function get_event_product_status($pitchId, $productId, $eventId)
{
    $dbProduct = DB::table('event_product_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('event_id', $eventId)
        ->where('product_id', $productId)
        ->pluck('active');

        return $dbProduct;
}

function get_tent_qty($pitchId, $tentId, $eventId)
{
    $dbProduct = DB::table('event_tent_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('tent_id', $tentId)
        ->where('event_id', $eventId)
        ->pluck('qty');

    return $dbProduct;
}

function get_tent_cost($pitchId, $tentId, $eventId)
{
    $dbProduct = DB::table('event_tent_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('event_id', $eventId)
        ->where('tent_id', $tentId)
        ->pluck('cost');

    return $dbProduct;
}


function get_event_saving(\App\Event $event)
{
    $cost = $event->Tents()->orderBy('cost', 'ASC')->first()->cost;

    return ($cost/100) * $event->discount;

}

function get_cheapest(\App\Event $event)
{
    $saving = get_event_saving($event);

    $cost = $event->Tents()->orderBy('cost', 'ASC')->first()->cost;

    return ($cost - $saving);

}


function is_early_bird(\App\Event $event)
{
    if($event->discount == 0)
    {
        return false;
    }

    if($event->early_bird_end < \Carbon\Carbon::now())
    {
        return false;
    }

    if($event->early_bird_start > \Carbon\Carbon::now())
    {
        return false;
    }

    return true;
}