<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class PrivacyPolicyController extends YourJetsController
{
    public function index()
    {
        $page = Page::with('sections')->where('slug', 'privacy_policy')->firstOrFail();
        $pageSections = $page->sections;

        return view('privacy_policy', compact( 'page', 'pageSections','menus'));
    }
}
