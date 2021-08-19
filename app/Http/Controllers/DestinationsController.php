<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Destination;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationsController extends Controller
{
    public function index(Request $request)
    {
        $continent = $request->continent;
        $country = $request->country;


        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $destBlock = DB::table('blocks')->where('slug', '=', 'destination_block')
            ->first();

        $continents = DB::table('continents')->get();
        $countries = DB::table('countries');

        if (isset($continent)) {
            $countries = $countries->where('continent_id', $continent);
        }

        $countries = $countries->get();

        if (empty($continent)) {
            $destinations = DB::table('destinations')->where('image_id', '>', 0)->paginate(15);
        } else {
            $destinations = DB::table('destinations')->where(['continent_id' => $continent, 'country_id' => $country])->paginate(6);
        }



        return view('destinations', [
            'menus' => $menus,
            'block' => $destBlock,
            'continents' => $continents,
            'countries' => $countries,
            'destinations' => $destinations
        ]);
    }

    public function show($slug)
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $destination = DB::table('destinations')->where('slug', '=', $slug)->first();
//        $destinationBlocks = Destination::with('destinationBlocks')->where()


        return view('inner_destinations', compact('destination', 'menus'));
    }

}
