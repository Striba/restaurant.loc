<?php

namespace Rest\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;
use Rest\Repositories\ReserveRepository;
use Rest\Repositories\MenuRepository;


class IndexController extends AdminController
{
    //
    public function __construct(ReserveRepository $res_rep, MenuRepository $m_rep)
    {
       parent::__construct();
       $this->template = env('THEME').'.admin.index';
       $this->res_rep = $res_rep;
       $this->m_rep = $m_rep;

        if(!$this->user){
            abort(403);
        }

    }

    public function index($id)
    {

        $reserve = $this->res_rep->get();
        $menu = $this->m_rep->get();

        $countReserves = count($reserve);
        $countMenus = count($menu);

        $content = view(env('THEME').'.admin.content')->with([
            'countReserves' => $countReserves,
            'countMenus' => $countMenus
        ])->render();

        $this->vars = array_add($this->vars, 'content', $content);

        $this->title = 'Панель администратора';

        return $this->renderOutput();
    }
}
