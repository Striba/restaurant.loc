<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;

use Rest\Repositories\MenuRepository;

class SiteController extends Controller
{
    //Свойство для хранения объекта класса dishes репозиторий
    protected $di_rep;

    //Свойство для хранения объекта класса dessert репозиторий
    protected $de_rep;

    //Свойство для хранения объекта класса drink репозиторий
    protected $dr_rep;

    //Свойство для хранения объекта класса Fdish репозиторий
    protected $fd_rep;

    //Свойство для хранения объекта класса Breakfast репозиторий
    protected $br_rep;

    //Свойство для хранения объекта класса Reserve репозиторий
    protected $res_rep;

    //Свойство для хранения объекта класса menus репозиторий
    protected $m_rep;

    //Свойство для хранения заголвка страницы
    protected $title;

    //Свойство для хранения имени шаблона для отображения инфомрации на конктретной странице
    protected $template;

    //Массив передаваемых переменных в шаблон($template)
    protected $vars = array();


    public function __construct(MenuRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    //Метод формирования представления
    protected function renderOutput(){


        $this->vars = array_add($this->vars, 'title', $this->title);

        //Помещаем в переменную содержание шаблона навигационного меню, преобразовывая содержимое в строку(render):
        $navigation = view(env('THEME').'.navigation')->render();

        //Передаем переменную содержащую код представления меню навигации в массив переменных:
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars);
    }

    public function getMenusItems()
    {
        $menu = $this->m_rep->get();
        return $menu;
    }

}
