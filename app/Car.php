<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * Many to many relationship with Option.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
}
