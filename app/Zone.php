<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zones';

    protected $fillable = ['name'];


    public function zones()
    {
        return $this->belongsToMany('App\CampSite');
    }

}
