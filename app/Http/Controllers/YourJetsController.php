<?php

namespace App\Http\Controllers;

use App\Traits\Menus;
use Illuminate\Http\Request;

class YourJetsController extends Controller
{
    use Menus;

    public function __construct()
    {
        $this->getMenus();
    }
}
