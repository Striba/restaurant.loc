<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //
    protected $fillable = ['title','alias','price','qty','dishes_id', 'user_id', 'amount','note'];

    public function users()
    {
        return $this->belongsTo('Rest\User');
    }

    public function breakfasts()
    {
        return $this->hasMany('Rest\Breakfast');
    }

    public function dish()
    {
        return $this->belongsTo('Rest\Dish');
    }
}
