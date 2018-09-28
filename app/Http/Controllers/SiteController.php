<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;

use Rest\Repositories\MenuRepository;
use Rest\User;

class SiteController extends Controller
{
    protected $di_rep;

    protected $res_rep;

    protected $m_rep;

    protected $gr_rep;

    protected $title;

    protected $template;

    protected $vars = array();


    public function __construct(MenuRepository $m_rep)
    {
        $this->m_rep = $m_rep;

        if (Auth()->check()) {
            //access:
            $flag = false;

            $user_id = Auth()->user()->id;
            $user = User::find($user_id);
            foreach ($user->roles as $role) {
                $role = $role->name;
                $flag = ($role == 'Admin') ? true : false;
            }

            $this->vars = array_add($this->vars, 'flag', $flag);
        }
    }

    //Метод формирования представления
    protected function renderOutput(){


        $this->vars = array_add($this->vars, 'title', $this->title);

        return view($this->template)->with($this->vars);
    }

    public function getMenusItems()
    {
        $menu = $this->m_rep->get();
        return $menu;
    }

}
