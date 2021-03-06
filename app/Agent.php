<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'user_id', 'name', 'slug', 'excerpt', 'biography', 'address', 'phone', 'domain', 'email', 'coordinate', 'file', 'country','city', 'address', 'latitud', 'longitud', 'state', 'zip', 'title','type'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class)->withTimestamps();
    }

    //    scope

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
}
