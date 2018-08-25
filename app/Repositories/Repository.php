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

        //Получаем объект с преобразованными данными из JSON:
        $result->transform(function ($item,$key){
            if(is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)) {
                $item->img = json_decode($item->img);
            }
            return $item;
        });

        return $result;
    }

    public function one($alias, $attr = [])
    {

        $result = $this->model->where('alias', $alias)->first();

        return $result;
    }
}