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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'type', 'location', 'start', 'end', 'thumbnail', 'banner', 'discount', 'show_homepage', 'about_info', 'parking_info', 'arrival_info', 'map'];

}
