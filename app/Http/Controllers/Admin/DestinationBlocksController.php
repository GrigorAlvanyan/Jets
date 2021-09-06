<?php

namespace App\Http\Controllers\Admin;

use App\Destination;
use App\DestinationBlock;
use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationBlocksRequest;
use Illuminate\Http\Request;

class DestinationBlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinationBlocks = DestinationBlock::get();

        return view('admin.destinationBlocks.index', compact('destinationBlocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::get();

        return view('admin.destinationBlocks.form',[
            'destinations' => $destinations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationBlocksRequest $request)
    {
        $created = DestinationBlock::create($request->only('destination_id', 'image_id',  'title', 'summary','position'));

        return redirect()->back()->with('message', 'Destination Block created');
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
    public function edit(DestinationBlock $destinationBlock)
    {
        $destinations = Destination::get();

        return view('admin.destinationBlocks.form', compact('destinationBlock', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinationBlocksRequest $request, $id)
    {
        $updated = DestinationBlock::where('id', '=', $id)->update($request->only('destination_id', 'image_id',
            'title', 'summary','position'));

        return redirect()->back()->with('message', 'Destination Block updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinationBlock = DestinationBlock::find($id);

        $destinationBlock->delete();

        return redirect()->back()->with('message', 'Destination Block deleted');
    }
}
