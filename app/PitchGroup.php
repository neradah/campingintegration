<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PitchGroup extends Model
{
    protected $table = 'pitch_groups';

    protected $fillable = ['name', 'persons'];
}
