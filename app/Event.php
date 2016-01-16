<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    public $dates = ['start', 'end'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'type', 'location', 'start', 'end', 'thumbnail', 'banner', 'discount', 'show_homepage', 'about_info', 'parking_info', 'arrival_info', 'map'];



    public function campsites()
    {
        return $this->belongsToMany('App\CampSite');
    }

    public function scopeProducts($query)
    {
        return $query
            ->join('event_product_qty_cost', $this->id, '=', 'event_product_qty_cost.event_id')
            ->join('products', 'event_product_qty_cost.product_id', '=', 'products.id')
            ->select('event_product_qty_cost.cost', 'products.name', 'products.id', 'event_product_qty_cost.pitch_id')
            ->groupBy('event_product_qty_cost.id');
    }

    public function scopeTents($query)
    {
        return $query
            ->join('event_tent_qty_cost', $this->id, '=', 'event_tent_qty_cost.event_id')
            ->join('pitches', 'event_tent_qty_cost.pitch_id', '=', 'pitches.id')
            ->join('tents', 'event_tent_qty_cost.tent_id', '=', 'tents.id')
            ->where('event_tent_qty_cost.qty', '>', 0)
            ->groupBy('event_tent_qty_cost.id')
            ->select('event_tent_qty_cost.cost', 'tents.name', 'tents.id', 'event_tent_qty_cost.qty', 'pitches.id as pitch_id');
    }



}

