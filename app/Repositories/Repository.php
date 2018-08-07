<?php

namespace Rest\Repositories;


abstract class Repository
{
    protected $model = false;

    public function get()
    {
        //Выбираем все поля из БД:
        $builder = $this->model->select('*');

        return $builder->get();
    }
}