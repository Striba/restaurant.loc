<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Repositories\GroupRepository;
use Rest\Menu;

class GroupController extends SiteController
{
    public function __construct(GroupRepository $gr_rep)
    {
        parent::__construct(new \Rest\Repositories\MenuRepository(new Menu()));
        $this->template = env('THEME').'.group';
        $this->gr_rep = $gr_rep;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->title = 'Мои группы';

        //$groups = false;
        $groups = true;

        $content = view(env('THEME').'.mygroups')->with('groups', $groups)->render();
        //$content = view(env('THEME').'.admin.mygroups')->render();
        //dd($content);

        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function add()
    {
        $this->title = 'Создать группу';

        $content = view(env('THEME').'.addGroup')->render();

        $this->vars = array_add($this->vars, 'content', $content);

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
    public function show($id)
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
