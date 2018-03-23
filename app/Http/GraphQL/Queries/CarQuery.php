<?php

namespace App\Http\GraphQL\Queries;

use App\Car;

class CarQuery
{
    public function resolve($root, array $args)
    {
        return Car::get();
    }
}
