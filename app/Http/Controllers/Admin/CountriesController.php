<?php

namespace App\Http\Controllers\Admin;

use App\Continent;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use Illuminate\Http\Request;

class CountriesController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();

        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::get();

        return view('admin.countries.form', [
            'continents' => $continents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $created = Country::create($request->only('image_id', 'continent_id', 'title', 'created_at'));


        return redirect()->back()->with('message', 'Country created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $continents = Continent::get();

        return view('admin.countries.form', compact('country', 'continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $updated = Country::where('id','=', $id)->update($request->only('image_id', 'continent_id', 'title', 'created_at'));

        return redirect()->back()->with('message', 'Country updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return redirect()->back()->with('message', 'Country deleted');
    }
}
