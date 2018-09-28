<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function roles()
    {
        return $this->belongsToMany('Rest\Role', 'permission_role');
    }
}
