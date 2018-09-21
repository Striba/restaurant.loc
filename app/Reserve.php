<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //
    protected $fillable = ['user_id', 'note'];


    public function user()
    {
        return $this->belongsTo('Rest\User');
    }


    public function dishes()
    {
        return $this->belongsToMany('Rest\Dish', 'reserves_dishes', 'reserves_id', 'dishes_id')->withPivot('title', 'alias', 'qty', 'amount', 'price');
    }

}
