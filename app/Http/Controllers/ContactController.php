<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class ContactController extends YourJetsController
{
    public function index()
    {
        $page = Page::with('sections')->where('slug', 'contact')->firstOrFail();

        $contacts = Addresses::first();

        return view('contact', compact('page', 'contacts'));
    }
}
