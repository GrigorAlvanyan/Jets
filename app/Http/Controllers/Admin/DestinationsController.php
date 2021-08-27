<?php

namespace App\Http\Controllers\Admin;

use App\Destination;
use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationRequest;
use Illuminate\Http\Request;

class DestinationsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();

        return view('admin.destinations.index', compact('destinations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationRequest $request)
    {
        $created = Destination::create($request->only('title', 'slug', 'show_on_home', 'is_top', 'summary',
            'body', 'image_id', 'continent_id', 'country_id', 'created_at'));



        return redirect()->back()->with('message', 'Destination created');
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
    public function edit(Destination $destination)
    {
        return view('admin.destinations.form', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinationRequest $request, $id)
    {
        $created = Destination::where('id','=', $id)->update($request->only('title', 'slug', 'show_on_home', 'is_top', 'summary',
            'body', 'image_id', 'continent_id', 'country_id', 'created_at'));

        return redirect()->back()->with('message', 'Destination updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jet = Destination::find($id);

        $jet->delete();

//        return redirect()->route('jets.index');
        return redirect()->back()->with('message', 'Destination deleted');
    }
}
