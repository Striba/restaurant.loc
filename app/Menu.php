<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //

    public function dishes()
    {
        return $this->hasMany('Rest\Dish');
    }
}
