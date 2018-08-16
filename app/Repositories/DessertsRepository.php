<?php

namespace Rest\Repositories;

use Rest\Dessert;


class DessertsRepository extends Repository
{
    public function __construct(Dessert $desserts)
    {
        $this->model = $desserts;
    }

}