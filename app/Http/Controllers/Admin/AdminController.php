<?php

namespace Rest\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Rest\Http\Requests;
use Rest\Http\Controllers\Controller;
use Auth;
use Rest\User;
use Gate;

class AdminController extends Controller
{
    //
    protected $user;
    protected $di_rep;
    protected $res_rep;
    protected $gr_rep;
    protected $m_rep;
    protected $template;
    protected $content = false;
    protected $title;
    protected $vars;

    public function __construct()
    {
        if(Gate::denies('VIEW_ADMIN')){
            abort(403);
        }
        $this->user = Auth::user();
        if(!$this->user){
            abort(403);
        }

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

    public function renderOutput()
    {
        $this->vars = array_add($this->vars, 'title', $this->title);

        if($this->content){
            $this->vars = array_add($this->vars, 'content', $this->content);
        }

        return view($this->template)->with($this->vars);
    }
}
