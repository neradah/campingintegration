<?php


function get_event_product_cost($pitchId, $productId, $price)
{
    $dbProduct = DB::table('event_product_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('product_id', $productId)
        ->pluck('cost');

    if($dbProduct)
        return $dbProduct;



    return $price;
}


function get_event_product_status($pitchId, $productId)
{
    $dbProduct = DB::table('event_product_qty_cost')
        ->where('pitch_id', $pitchId)
        ->where('product_id', $productId)
        ->pluck('active');

        return $dbProduct;

}