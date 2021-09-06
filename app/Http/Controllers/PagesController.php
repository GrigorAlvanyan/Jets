<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Block;
use App\Destination;
use App\Menu;
use App\Page;
use App\Partner;
use App\Statistics;

class PagesController extends YourJetsController
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
            default:
                //
                break;

        }
    }

    public function ourCompany($slug)
    {
        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();
        $pageSections = $page->sections;

        $partners = Partner::get();

        return view('pages/our_company', compact('page', 'pageSections', 'partners'));
    }

    public function whyYourJets($slug)
    {
        $page = Page::with('sections')->where('slug', $slug)->firstOrFail();
        $pageSections = $page->sections;

        $pageBlock1 = Block::where('slug', 'why_your_jets_block1')->first();
        $pageBlock2 = Block::where('slug', 'why_your_jets_block2')->first();
        $sliderDestinations = Destination::get(); //todo

        $statistics = Statistics::get()->first();

        return view('pages/why_your_jets',
            compact('page', 'pageSections', 'sliderDestinations', 'pageBlock1', 'pageBlock2', 'statistics'));
    }




}
