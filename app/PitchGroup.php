<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PitchGroup extends Model
{
    protected $table = 'pitches';

    protected $fillable = ['name', 'persons'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tents()
    {
        return $this->belongsToMany('App\Tent');
    }
}

