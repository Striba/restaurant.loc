<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Menu;
use Rest\Repositories\DessertsRepository;

class DessertsController extends SiteController
{
    public function __construct(DessertsRepository $de_rep)
    {
        parent::__construct(new \Rest\Repositories\MenuRepository(new Menu()));

        $this->template = env('THEME').'.desserts';
        $this->de_rep = $de_rep;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->title = 'Меню дессертов';

        $alias = 'desserts';

        $singleMenu = $this->de_rep->get();

        $singleMenuItem = view(env('THEME').'.single_menu_item')->with(['singleMenu' => $singleMenu,
                                                                        'alias' => $alias
            ])->render();

        $this->vars = array_add($this->vars, 'singleMenuItem', $singleMenuItem);

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
    public function show($alias = false)
    {
        $dessert = $this->de_rep->one($alias);
        //dd($dessert);

        $this->title = $dessert->name;

        $single = view(env('THEME').'.eachDescription')->with('item', $dessert)->render();
        $this->vars = array_add($this->vars, 'single', $single);

        $this->template = env('THEME').'.detailedItem';


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
