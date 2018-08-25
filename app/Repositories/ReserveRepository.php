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
        $name = $dish->name;
        $price = $dish->price;
        $amount = $dish->amount;

      //dd(session('reserve.'.$ID));
        //Проверка добавления методом push
        if($request->session()->has('reserve.'.$ID)){
            //echo  'qty before: '.$qty;
            //dump($qty);
            $qty += $request->session()->get('reserve.'.$ID.'.qty');
            //dump($qty);
            $request->session()->put('reserve.'.$ID.'.qty', $qty);
            $request->session()->put('reserve.'.$ID.'.price', $price * $qty);
        } else {

            $request->session()->put('reserve.'.$ID.'.qty', $qty);
            $request->session()->put('reserve.'.$ID.'.name', $name);
            $request->session()->put('reserve.'.$ID.'.alias', $dish->alias);
            $request->session()->put('reserve.'.$ID.'.price', $price * $qty);
            $request->session()->put('reserve.'.$ID.'.amount', $amount);
        }

    }

    public function deleteItem($id)
    {

        Session::forget('reserve.'.$id);
    }
}