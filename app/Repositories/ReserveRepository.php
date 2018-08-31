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

    public function addReserve($data)
    {
//        if(Gate::denies('save', $this->model))
//        {
//            abort(403);
//        }

        //$data = $request->except('_token','image');

        //dd($data);
        foreach ($data as $item){
            $this->model->fill($item);
            //$this->model->breakfasts()->save($this->model);
            $this->model->save();
        }
        //$this->model->fill($data);
        dd($this->model);

        if(empty($data)){
            return array('Нет данных');
        }

        if(empty($data['alias'])){
            $data['alias'] = $this->transliterate($data['title']);
        }

        //dd($data);

        if($this->one($data['alias'], false)){
            $request->merge(array('alias' => $data['alias']));
            //dd($request);
            $request->flash();

            return ['error' => 'Данный псевдоним уже исспользуется'];
        }

        if($request->hasFile('image')){
            $image = $request->file('image');

            if($image->isValid()){

                $str = str_random(8);

                $obj = new \stdClass;

                $obj->mini = $str.'_mini.jpg';
                $obj->max = $str.'_max.jpg';
                $obj->path = $str.'.jpg';

                $img = Image::make($image);

                //dd($img);
                $img->fit(Config::get('settings.image')['width'],
                    Config::get('settings.image')['height'])
                    ->save(public_path().'/'.env('THEME').'/images/articles/'.$obj->path);


                $img->fit(Config::get('settings.articles_img')['max']['width'],
                    Config::get('settings.articles_img')['max']['height'])
                    ->save(public_path().'/'.env('THEME').'/images/articles/'.$obj->max);

                $img->fit(Config::get('settings.articles_img')['mini']['width'],
                    Config::get('settings.articles_img')['mini']['height'])
                    ->save(public_path().'/'.env('THEME').'/images/articles/'.$obj->mini);


                //dd(Config::get('settings.image')['width']);
                $data['img'] = json_encode($obj);

                $this->model->fill($data);

                if($request->user()->articles()->save($this->model)){
                    return ['status' => 'Материал добавлен'];
                }
            }
        }

    }
}