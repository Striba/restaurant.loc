<?php

namespace Rest\Repositories;

use Rest\Group;


class GroupRepository extends Repository
{
    public function __construct(Group $group)
    {
        $this->model = $group;
    }
}