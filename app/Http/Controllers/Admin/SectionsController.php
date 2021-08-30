<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionsRequest;
use App\Page;
use App\PageSection;
use Illuminate\Http\Request;

class SectionsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = PageSection::get();

        return view('admin.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::get();

        return view('admin.sections.form',[
            'pages' => $pages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionsRequest $request)
    {
        $created = PageSection::create($request->only('page_id', 'image_id', 'youtube_id',
            'position', 'title', 'summary','created_at'));

        return redirect()->back()->with('message', 'Section created');
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
    public function edit(PageSection $section)
    {
        $pages = Page::get();

        return view('admin.sections.form', compact('section', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionsRequest $request, $id)
    {
        $created = PageSection::where('id', '=', $id)->update($request->only('page_id', 'image_id', 'youtube_id',
            'position', 'title', 'summary','created_at'));

        return redirect()->back()->with('message', 'Section updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = PageSection::find($id);

        $section->delete();

        return redirect()->back()->with('message', 'Section deleted');
    }
}
