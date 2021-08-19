<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\DB;


class OurCompanyController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $partners = DB::table('partners')->get();

        return view('our_company', compact('partners', 'menus'));
    }
}
