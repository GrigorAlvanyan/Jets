<?php

namespace App\Http\Controllers\Admin;

use App\Block;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlocksRequest;
use Illuminate\Http\Request;

class BlocksController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::get();

        return view('admin.blocks.index', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blocks.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlocksRequest $request)
    {
        $created = Block::create($request->only('image_id', 'title', 'slug', 'show_on_home',  'summary',
            'youtube_link', 'url',  'url_title', 'created_at'));

        return redirect()->back()->with('message', 'Block created');
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
    public function edit(Block $block)
    {
        return view('admin.blocks.form', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlocksRequest $request, $id)
    {
        $uptades = Block::where('id','=', $id)->update($request->only('image_id', 'title', 'slug', 'show_on_home',  'summary',
            'youtube_link', 'url',  'url_title', 'created_at'));

        return redirect()->back()->with('message', 'Block updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $block = Block::find($id);

        $block->delete();

       return redirect()->back()->with('message', 'Block deleted');
    }
}
