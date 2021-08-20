<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Destination;
use App\DestinationBlock;
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


        $destinations = DB::table('destinations');

        if (empty($continent)) {
            $destinations = $destinations->where('image_id', '>' , 0);
        } else {
            if (empty($country)) {
                $destinations = $destinations->where('continent_id', $continent);
            } else {
                $destinations = $destinations->where(['continent_id' => $continent, 'country_id' => $country]);
            }
        }
        $destinations = $destinations->paginate(9);


        //        dd($destinations);



//        $destinations = DB::table('destinations')->where(['continent_id' => $continent, 'country_id' => $country])->paginate(6);


        return view('pages/destinations', [
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


        $dest = DB::table('destinations')->where('slug', $slug)->first();

        $destination = Destination::with('destinationBlocks')->where('id', $dest->id)->firstOrFail();
        $destinationBlock = $destination->destinationBlocks;

        $sliderDestinations = Destination::get();//todo


        return view('pages/inner_destinations', compact('destinationBlock', 'sliderDestinations','menus'));
    }

}
