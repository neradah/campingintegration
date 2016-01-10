<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tent extends Model
{
    protected $table = 'tents';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pitchgroups()
    {
        return $this->belongsToMany('App\PitchGroup');
    }
}
