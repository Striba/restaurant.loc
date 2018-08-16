<?php

namespace Rest\Http\Controllers;

use Illuminate\Http\Request;

use Rest\Http\Requests;

use Rest\Repositories\MenuRepository;

class SiteController extends Controller
{
    //Свойство для хранения объекта класса desserts репозиторий
    protected $de_rep;

    //Свойство для хранения объекта класса drinks репозиторий
    protected $dr_rep;

    //Свойство для хранения объекта класса first_dishes репозиторий
    protected $fd_rep;

    //Свойство для хранения объекта класса breakfasts репозиторий
    protected $br_rep;

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

//        //Получаем данные меню:
//        $menusItems = $this->getMenusItems();
//
//        //Сформируем переменную содержащую вид меню с переданными данными из таблицы и все это в виде строки.
//        $menus = view(env('THEME').'.menus')->with('menusItems',$menusItems)->render();
//
//        //Передаем переменную  меню в массив переменных:
//        $this->vars = array_add($this->vars, 'menus', $menus);

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
