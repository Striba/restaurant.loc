<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $table = 'dishes';
    //protected $fillable = ['title', 'alias', 'price', 'amount'];

    public function menu()
    {
        return $this->belongsTo('Rest\Menu');
    }

    public function reserves()
    {

        return $this->belongsToMany('Rest\Reserve', 'reserves_dishes', 'dishes_id', 'reserves_id')->withPivot('title', 'alias', 'qty', 'amount', 'price');
    }


}
