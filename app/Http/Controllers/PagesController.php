<?php

namespace App\Http\Controllers;

use App\Block;
use App\Destination;
use App\Menu;
use App\Page;
use App\Partner;
use App\Statistics;

class PagesController extends Controller
{
    public function getPage($slug)
    {
        switch ($slug) {
            case 'our_mission':
                return $this->ourCompany($slug);
                break;
            case 'why_your_jets':
                return $this->whyYourJets($slug);
                break;
            case 'contact':
                return $this->contact($slug);
                break;
            case 'destinations':
                return $this->destinations($slug);
                break;
            case '':
                break;
            default:
                //
                break;

        }
    }



    public function ourCompany($slug)
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();
        $pageSections = $page->sections;

        $partners = Partner::get();

        return view('pages/our_company', compact('page', 'pageSections', 'menus', 'partners'));
    }

    public function whyYourJets($slug)
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();
        $pageSections = $page->sections;

        $pageBlock1 = Block::where('slug', 'why_your_jets_block1')->first();
        $pageBlock2 = Block::where('slug', 'why_your_jets_block2')->first();
        $sliderDestinations = Destination::get(); //todo

        $statistics = Statistics::get()->first();

        return view('pages/why_your_jets',
            compact('page', 'pageSections', 'sliderDestinations', 'pageBlock1', 'pageBlock2', 'statistics', 'menus'));
    }

    public function contact($slug)
    {
        $menus = Menu::with(['menuLinks' => function ($q) {
            $q->with('childrens');
        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();
//        $pageSections = $page->sections;

        return view('pages/contact', compact('page', 'menus'));



    }



    public function destinations($slug)
    {
//        $menus = Menu::with(['menuLinks' => function ($q) {
//            $q->with('childrens');
//        }])->where('title', 'header')->orWhere('title', 'footer')->get();

        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();

        return view('pages/destinations', compact('page'));

    }



}
