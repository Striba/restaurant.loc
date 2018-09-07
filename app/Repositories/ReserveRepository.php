<?php

namespace Rest\Repositories;

use Rest\Reserve;
use Illuminate\Http\Request;
use Session;


class ReserveRepository extends Repository
{

    public function __construct(Reserve $reserve)
    {
        $this->model = $reserve;
    }

    public function addDishToReserve(Request $request,$dish, $qty = 1)
    {
        //dd($dish);
        //Получаем данные заказа:
        $ID = $dish->id;
        $title = $dish->title;
        $price = $dish->price;
        $amount = $dish->amount;
        $user_id = $dish->user_id;
        $dishes_id = $dish->dishes_id;

        //Проверка добавления методом push
        if($request->session()->has('reserve.'.$ID)){
            //dump($qty);
            $qty += $request->session()->get('reserve.'.$ID.'.qty');
            //dump($qty);
            $request->session()->put('reserve.'.$ID.'.qty', $qty);
            $request->session()->put('reserve.'.$ID.'.price', $price * $qty);
        } else {

            $request->session()->put('reserve.'.$ID.'.qty', $qty);
            $request->session()->put('reserve.'.$ID.'.title', $title);
            $request->session()->put('reserve.'.$ID.'.alias', $dish->alias);
            $request->session()->put('reserve.'.$ID.'.price', $price * $qty);
            $request->session()->put('reserve.'.$ID.'.amount', $amount);
            $request->session()->put('reserve.'.$ID.'.dishes_id', $dishes_id);
            $request->session()->put('reserve.'.$ID.'.user_id', $user_id);
        }

    }

    public function deleteItem($id)
    {

        Session::forget('reserve.'.$id);
    }

    public function addReserve($data)
    {

        if(empty($data)){
            return array('Нет данных');
        }

        $res = $this->model;

        //dd($res);

        foreach ($data as $item){
            $res = new Reserve;
            $res->fill($item);
            $res->save();
        }


        return ['status' => 'Ваш заказ принят'];

    }
}