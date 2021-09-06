<?php


namespace App\Traits;


use App\Menu;
use Illuminate\Support\Facades\View;

trait Menus
{
    public function getMenus()
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        View::share('menus', $menus);
    }
}
