<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //
    protected $fillable = ['title','alias','price','qty','breakfasts_id'];

    public function users()
    {
        return $this->belongsTo('Rest\User');
    }

    public function breakfasts()
    {
        return $this->hasMany('Rest\Breakfast');
    }
}
