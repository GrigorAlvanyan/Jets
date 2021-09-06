<?php

namespace App\Http\Controllers;

use App\Block;
use App\Destination;
use App\Jet;
use App\JetCabin;
use App\Menu;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JetsController extends YourJetsController
{
    public function index()
    {
        $topJets = Jet::paginate(10);
        $jetPage = DB::table('pages')->where('model', 'jet')->first();

        return view('top_jets', compact('topJets', 'jetPage'));
    }

    public function show($slug)
    {
        $topJet = Jet::with('cabin')->where('slug', $slug)->firstOrFail();

        return view('inner_jets', compact('topJet'));
    }
}
