<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Menu;
use Rest\Repositories\DrinksRepository;

class IndexController extends SiteController
{

    public function __construct(DrinksRepository $dr_rep)
    {
        parent::__construct(new \Rest\Repositories\MenuRepository(new Menu()));
        $this->template = env('THEME').'.index';
        $this->dr_rep = $dr_rep;
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
    public function show()
    {
        //

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
