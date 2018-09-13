<?php

namespace Rest\Http\Controllers\admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;
use Rest\Repositories\ReserveRepository;
use PDF;

class ReserveController extends AdminController
{
    public function __construct(ReserveRepository $res_rep)
    {
        parent::__construct();
        $this->template = env('THEME').'.admin.index';
        $this->res_rep = $res_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = $this->res_rep->get();

        $content = view(env('THEME').'.admin.reserves')->with('data', $data)->render();

        $this->vars = array_add($this->vars, 'content', $content);

        $this->title = 'Панель администратора';

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

    public function pdf($id)
    {
        $data = $this->res_rep->getById($id,'id');
        $data = $data->toArray();
        //dd($data);

        $pdf = PDF::loadView(env('THEME').'.reserveExport', compact('data'));
        return $pdf->download('reserve_number_.'.$data['id'].'_.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //dd("Поступивший айди: ".$id);
        $data = $this->res_rep->getById($id,'id');
        //dd($data);

        $content = view(env('THEME').'.admin.oneReserve')->with('data', $data)->render();

        $this->vars = array_add($this->vars, 'content', $content);

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
        //dd("Поступивший айди: ".$id);
        $data = $this->res_rep->getById($id,'id');
        $data->delete();

        return redirect()->route('admin.reserve.index');

    }



}
