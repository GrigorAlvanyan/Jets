<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\AdminSidebar;

class AdminController extends Controller
{
    use AdminSidebar;

   public function __construct()
   {
       $this->getSidebar();
   }

}
