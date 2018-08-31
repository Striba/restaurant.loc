<?php

namespace Rest\Repositories;

use Rest\Drink;

class DrinksRepository extends Repository
{
    public function __construct(Drink $drinks)
    {
        $this->model = $drinks;
    }

}