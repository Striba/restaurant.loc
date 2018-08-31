<?php

namespace Rest\Repositories;


abstract class Repository
{
    protected $model = false;

    public function get($select = '*')
    {
        //Выбираем все поля из БД:
        $builder = $this->model->select($select);

        return $this->check($builder->get());
    }

    //Метод проверки поступивших данных
    protected function check($result)
    {

        //Пуста ли коллекция:
        if($result->isEmpty()){
            return false;
        }


        return $result;
    }

    public function one($alias, $attr = [])
    {

        $result = $this->model->where('alias', $alias)->first();

        return $result;
    }

    public function getById($id, $field_name)
    {
        //$result = $this->model->where($field_name, $id)->first();
        $result = $this->model->where($field_name, $id)->get();

        return $result;
    }
}