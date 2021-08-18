<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationsController extends Controller
{
    public function index(Request $request)
    {
        $continent = $request->continent;
        $continent = $request->country;

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

        //todo get destionations by country id

//        $continents = DB::table('continents')
//            ->select([
//                'continents.*', 'continents.id as cont_id',
//                'countries.*', 'countries.id as country_id',
//                'countries.title', 'countries.title as country_title',
//                'continents.title', 'continents.title as cont_title',
//            ])
//            ->join('countries', 'continents.id', 'countries.continent_id')
//            ->get();

        return view('destinations', [
            'menus' => $menus,
            'block' => $destBlock,
            'continents' => $continents,
            'countries' => $countries,
        ]);
    }
}
