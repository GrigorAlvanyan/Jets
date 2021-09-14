<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Page;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

//crud create, read, update, delete
class PagesController extends AdminController
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $created = Page::create($request->only('title', 'slug', 'summary', 'body', 'model'));

        return redirect()->back()->with('message', 'Page created');
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
    public function edit(Page $page)
    {
//        dd($page->files);
//        $page = Page::find($id) ?? abort(404);
        return view('admin.pages.form', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $data = $request->only('title', 'slug', 'summary', 'body', 'model');

        if ($request->hasFile('images')) {
            $uploadedImageId = $this->imageUploadService->imageUploadPost($request->images, 'pages');
            $data['image_id'] = $uploadedImageId;
        }

        $updated = Page::where('id','=', $id)->update($data);
        return redirect()->back()->with('message', 'Page updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = Page::find($id);

        $pages->delete();

        return redirect()->back()->with('message', 'Page deleted');
    }
}
