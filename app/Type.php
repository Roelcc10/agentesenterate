<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function agents()
    {
        return $this->belongsToMany(Agent::class)->withTimestamps();
    }

}
