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



class HomeController extends YourJetsController
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $sliders = Slider::where('show_on_home', 1)->orderBy('position')->get();

        $homeBlocks = Block::where('show_on_home', 1)->get();

        $destinations = Destination::where('show_on_home', 1)->get();

        $jets = Jet::where('is_top',1)->get();

        return view('home', compact( 'sliders', 'homeBlocks', 'destinations', 'jets'));

    }

}
