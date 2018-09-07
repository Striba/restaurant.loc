<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Menu;
use Rest\Repositories\DishesRepository;

class DishesController extends SiteController
{
    public function __construct(DishesRepository $di_rep)
    {
        parent::__construct(new \Rest\Repositories\MenuRepository(new Menu()));

        $this->template = env('THEME').'.dishes';
        $this->di_rep = $di_rep;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($alias = false)
    {
        //

        $dish = $this->di_rep->one($alias);
        $this->title = $dish->title;

        $single = view(env('THEME').'.eachDescription')->with('item', $dish)->render();
        $this->vars = array_add($this->vars, 'single', $single);

        $this->template = env('THEME').'.detailedItem';


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
    public function show($alias)
    {
        //
        dd($alias);
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
