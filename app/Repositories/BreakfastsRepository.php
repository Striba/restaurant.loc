<?php

namespace Rest\Repositories;

use Rest\Breakfast;

class BreakfastsRepository extends Repository
{
    public function __construct(Breakfast $breakfast)
    {
        $this->model = $breakfast;
    }

}