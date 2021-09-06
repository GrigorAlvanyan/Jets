<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Destination;
use App\DestinationBlock;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationsController extends YourJetsController
{
    public function index(Request $request)
    {
        $continent = $request->continent;
        $country = $request->country;


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
        $destinations = $destinations->paginate(10);

        $destinationPage = DB::table('pages')->where('model', 'destination')->first();

//        $destinations = DB::table('destinations')->where(['continent_id' => $continent, 'country_id' => $country])->paginate(6);


        return view('destinations', [
            'block' => $destBlock,
            'continents' => $continents,
            'countries' => $countries,
            'destinations' => $destinations,
            'destinationPage' => $destinationPage
        ]);
    }

    public function show($slug)
    {

        $dest = DB::table('destinations')->where('slug', $slug)->first();

        $destination = Destination::with(['destinationBlocks', 'jets'])->where('id', $dest->id)->firstOrFail();

        $destJets = $destination->jets;
        $destinationBlock = $destination->destinationBlocks;

        $sliderDestinations = Destination::get();//todo


        return view('inner_destinations', compact('destinationBlock', 'destJets','sliderDestinations'));
    }

}
