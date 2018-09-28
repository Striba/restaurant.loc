<?php

namespace Rest;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('Rest\User', 'role_user');
    }

    public function perms()
    {
        return $this->belongsToMany('Rest\Permission', 'permission_role');
    }

}
