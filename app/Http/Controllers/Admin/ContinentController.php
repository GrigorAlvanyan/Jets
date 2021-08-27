<?php

namespace App\Http\Controllers\Admin;

use App\Continent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContinentRequest;
use Illuminate\Http\Request;

class ContinentController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::all();

        return view('admin.continents.index', compact('continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.continents.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContinentRequest $request)
    {
        $created = Continent::create($request->only('image_id', 'title', 'created_at'));

        return redirect()->back()->with('message', 'Continent created');
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
    public function edit(Continent $continent)
    {
        return view('admin.continents.form', compact('continent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContinentRequest $request, $id)
    {
        $updated = Continent::where('id','=', $id)->update($request->only('image_id', 'title', 'created_at'));

        return redirect()->back()->with('message', 'Continent updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $continent = Continent::find($id);

        $continent->delete();

        return redirect()->back()->with('message', 'Continent deleted');
    }
}
