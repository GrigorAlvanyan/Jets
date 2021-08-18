<?php

namespace App\Http\Controllers;

use App\Block;
use App\Destination;
use App\Menu;
use App\MenuLinks;
use App\Slider;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function requestQuotes(Request $request)
    {
        dd($request->only('from'));
    }

}
