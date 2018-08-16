<?php
/**
 * Created by PhpStorm.
 * User: Strybko SS
 * Date: 14.08.2018
 * Time: 18:07
 */

namespace Rest\Repositories;

use Rest\Drink;

class DrinksRepository extends Repository
{
    public function __construct(Drink $drinks)
    {
        $this->model = $drinks;
    }

}