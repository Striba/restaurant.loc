<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $table = 'dishes';

    public function menu()
    {
        return $this->belongsTo('Rest\Menu');
    }

    public function reserves()
    {
        return $this->hasMany('Rest\Reserve');
    }
}
