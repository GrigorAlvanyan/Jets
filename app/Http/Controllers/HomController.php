<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $sliders = Slider::where('show_on_home', 1)->orderBy('position')->get();

        $homeBlocks = Block::where('show_on_home', 1)->get();

        $destinations = Destination::where('show_on_home', 1)->get();

        return view('home', compact('menus', 'sliders', 'homeBlocks', 'destinations'));
    }
}
