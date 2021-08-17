<?php

namespace App\Http\Controllers;

use App\Block;
use App\Destination;
use App\Jet;
use App\Menu;
use App\Slider;
use Illuminate\Http\Request;

class JetsController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $topJets = Jet::where('is_top', 1)->paginate(2);

        return view('top_jets', compact('topJets', 'menus'));
    }

    public function show($slug)
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $topJet = Jet::with('cabin')->where('slug', $slug)->firstOrFail();

        return view('inner_jets', compact('topJet', 'menus'));
    }
}
