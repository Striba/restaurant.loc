<?php

namespace Rest\Repositories;

use Rest\Dish;


class DishesRepository extends  Repository
{
    public function __construct(Dish $dishes)
    {
        $this->model = $dishes;
    }

}