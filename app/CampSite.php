<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampSite extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'camp_sites';

    protected $fillable = ['name', 'address', 'about', 'arrival_info', 'check_in_time', 'check_out_time', 'parking_info', 'image'];


    public function zones()
    {
        return $this->belongsToMany('App\Zone');
    }
}
