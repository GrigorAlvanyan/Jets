<?php

namespace App\Traits;

use App\Page;
use Illuminate\Support\Facades\View;

trait AdminSidebar
{
    public function getSidebar()
    {
        $pages = Page::all();

        $sidebarItems['pages'] = $pages;

        View::share('sidebarItems', $sidebarItems);
    }

}
