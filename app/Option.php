<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    /**
     * Many to many relationship w/ Car.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
