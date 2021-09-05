<?php

namespace App\Http\Controllers;

use App\Jet;
use Illuminate\Support\Facades\Auth;
use App\Block;
use App\Destination;
use App\Menu;
use App\MenuLinks;
use App\Slider;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {



        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $sliders = Slider::where('show_on_home', 1)->orderBy('position')->get();

        $homeBlocks = Block::where('show_on_home', 1)->get();

        $destinations = Destination::where('show_on_home', 1)->get();

        $jets = Jet::where('is_top',1)->get();

        return view('home', compact('menus', 'sliders', 'homeBlocks', 'destinations', 'jets'));

    }

}
