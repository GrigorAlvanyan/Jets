<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class ContactPrivateController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $page = Page::with('sections')->where('slug', 'contact_private')->firstOrFail();
        $pageSections = $page->sections;

        return view('contact_private', compact( 'page','pageSections','menus'));
    }
}
