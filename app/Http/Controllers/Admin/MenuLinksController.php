<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenusRequest;
use App\Menu;
use App\MenuLinks;
use Illuminate\Http\Request;

class MenuLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuLinks = MenuLinks::get();

        return view('admin.menuLinks.index', compact('menuLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::get();

        return view('admin.menuLinks.form', [
            'menus' => $menus
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenusRequest $request)
    {
        $created = MenuLinks::create($request->only('menu_id', 'parent_id', 'title', 'status', 'position', 'url'));

        return redirect()->back()->with('message', 'MenuLink created');
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
    public function edit(MenuLinks $menuLink)
    {
        $menus = Menu::get();

        return view('admin.menuLInks.form', compact('menuLink', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated = MenuLinks::where('id', '=', $id)->update($request->only('menu_id', 'parent_id', 'title',
            'status', 'position', 'url'));

        return  redirect()->back()->with('message', 'MenuLink updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuLInk = MenuLinks::find($id);

        $menuLInk->delete();

        return redirect()->back()->with('message', 'MenuLink deleted');
    }
}
