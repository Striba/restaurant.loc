<?php

namespace Rest\Repositories;

use Rest\Fdishes;


class FdishesRepository extends Repository
{
    public function __construct(Fdishes $fdishes)
    {
        $this->model = $fdishes;
    }

}