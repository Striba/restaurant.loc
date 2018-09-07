<?php

namespace Rest\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;

class IndexController extends AdminController
{
    //
    public function __construct()
    {
       parent::__construct();
       $this->template = env('THEME').'.admin.index';
    }

    public function index($id)
    {
        //dd('Ваш айди: ' . $id);

        $this->title = 'Панель администратора';

        return $this->renderOutput();
    }
}
