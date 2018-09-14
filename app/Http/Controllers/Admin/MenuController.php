<?php

namespace Rest\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;
use Rest\Repositories\MenuRepository;
use PDF;

class MenuController extends AdminController
{
    //
    public function __construct(MenuRepository $m_rep)
    {
        parent::__construct();
        $this->template = env('THEME').'.admin.index';
        $this->m_rep = $m_rep;
    }

    public function index()
    {
        $data = $this->m_rep->get();
        //dd($data);

        $content = view(env('THEME').'.admin.menus')->with('data', $data)->render();

        $this->vars = array_add($this->vars, 'content', $content);

        $this->title = 'Панель администратора';

        return $this->renderOutput();
    }

    public function pdf()
    {
        $data = $this->m_rep->get();
        $data = $data->toArray();
        //dd($data);

        $pdf = PDF::loadView(env('THEME').'.admin.menuExport', compact('data'));
        return $pdf->download('rest_menu_.pdf');
    }
}
