<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JetRequest;
use App\Jet;
use Illuminate\Http\Request;

class JetsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jets = Jet::all();

        return view('admin.jets.index', compact('jets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jets.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JetRequest $request)
    {

        $created = Jet::create($request->only('title', 'slug', 'is_top', 'manufacturer',
            'speed', 'height', 'range', 'created_at'));

        return redirect()->back()->with('message', 'Jet created');
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
    public function edit(Jet $jet)
    {
        return view('admin.jets.form', compact('jet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JetRequest $request, $id)
    {
        $created = Jet::where('id','=', $id)->update($request->only('title', 'slug', 'is_top', 'manufacturer',
            'speed', 'height', 'range', 'created_at'));

        return redirect()->back()->with('message', 'Jet updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jet = Jet::find($id);

        $jet->delete();

//        return redirect()->route('jets.index');
        return redirect()->back()->with('message', 'Jet deleted');
    }
}
