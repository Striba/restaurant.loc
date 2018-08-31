<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Breakfast extends Model
{
    //
    public function reserves()
    {
        return $this->belongsToMany('Rest\Reserves');
    }

    public function users()
    {
        return $this->belongsToMany('Rest\Users');
    }
}
