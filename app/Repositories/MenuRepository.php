<?php

namespace Rest\Repositories;

use Rest\Menu;

class MenuRepository extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}