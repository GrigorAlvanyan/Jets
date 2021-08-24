<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends AdminController
{
   public function dashboard()
   {
       return view('admin.dashboard');
   }

}
