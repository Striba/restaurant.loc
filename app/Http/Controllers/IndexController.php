<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Menu;
//use Rest\Repositories\DrinksRepository;
use Rest\Repositories\DishesRepository;

class IndexController extends SiteController
{

    public function __construct(DishesRepository $di_rep)
    {
        parent::__construct(new \Rest\Repositories\MenuRepository(new Menu()));
        $this->template = env('THEME').'.index';
        $this->di_rep = $di_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Получаем данные меню:
        $menusItems = $this->getMenusItems();
        //dd($menusItems);

        //Сформируем переменную содержащую вид меню с переданными данными из таблицы и все это в виде строки.
        $menus = view(env('THEME').'.menus')->with('menusItems',$menusItems)->render();

        //Передаем переменную  меню в массив переменных:
        $this->vars = array_add($this->vars, 'menus', $menus);

        $this->title = 'Наше меню';


        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($alias)
//    {
    public function show($id)
    {

        //
        //echo 'indexController: '.$alias;
        echo 'indexController: '.$id;
        //dd($alias);
        //dd($id);
        $allDishes = $this->di_rep->get();
        //dd($allDishes);
        //$singleMenu = $this->di_rep->where('menu_id',$id);

        //$menu_id
        $alias = Menu::select('alias')->where('id', $id)->first();
        $alias = $alias->alias;
        //dd($alias);

        $this->template = env('THEME').'.'.$alias;

        $singleMenu = $this->di_rep->getById($id,'menu_id');
        //dd($singleMenu);
//        $select = '';
//        $singleMenu = $this->di_rep->get();

        $singleMenuItem = view(env('THEME').'.single_menu_item')->with(['singleMenu' => $singleMenu,
            'alias' => $alias
        ])->render();




        $this->vars = array_add($this->vars, 'singleMenuItem', $singleMenuItem);

        return $this->renderOutput();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
