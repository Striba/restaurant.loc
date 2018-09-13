<?php

namespace Rest\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;
use Rest\Repositories\ReserveRepository;

class IndexController extends AdminController
{
    //
    public function __construct(ReserveRepository $res_rep)
    {
       parent::__construct();
       $this->template = env('THEME').'.admin.index';
       $this->res_rep = $res_rep;
    }

    public function index($id)
    {
        //dd('Ваш айди: ' . $id);
        $reserve = $this->res_rep->get();
        //dd($reserve);
        //dd(count($reserve));
        $countReserves = count($reserve);

        $content = view(env('THEME').'.admin.content')->with('countReserves', $countReserves)->render();

        $this->vars = array_add($this->vars, 'content', $content);

        $this->title = 'Панель администратора';

        return $this->renderOutput();
    }
}
