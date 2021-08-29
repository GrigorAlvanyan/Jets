<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CabinSpecificationsRequest;
use App\Jet;
use App\JetCabin;
use Illuminate\Http\Request;

class CabinSpecificationsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabinSpecifications = JetCabin::all();

        return view('admin.cabinSpecifications.index', compact('cabinSpecifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jets = Jet::get();


        return view('admin.cabinSpecifications.form', [
            'jets' => $jets
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CabinSpecificationsRequest $request)
    {
        $created = JetCabin::create($request->only('image_id', 'title', 'seats', 'suitcase', 'carry_on',
            'manufacturer', 'height', 'speed', 'created_at'));


        return redirect()->back()->with('message', 'Cabin Specifications created');
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
    public function edit(JetCabin $cabinSpecification)
    {
        $jets = Jet::get();

        return view('admin.cabinSpecifications.form', compact('cabinSpecification', 'jets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CabinSpecificationsRequest $request, $id)
    {
        $updated = JetCabin::where('id','=', $id)->update($request->only('image_id', 'title', 'seats', 'suitcase', 'carry_on',
            'manufacturer', 'height', 'speed', 'created_at'));

        return redirect()->back()->with('message', 'Cabin Specification updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cabin = JetCabin::find($id);

        $cabin->delete();

        return redirect()->back()->with('message', 'Cabin Specification  deleted');
    }
}
