<?php

namespace App\Http\Controllers;

use App\Models\InformationPage;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display the main information page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Fetch all information pages.  You might want to order them.
        $informationPages = InformationPage::all();
        return view('information.index', ['informationPages' => $informationPages]);
    }

    /**
     * Display a specific information page.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        $page = InformationPage::where('slug', $slug)->firstOrFail();
        return view('information.show', ['page' => $page]);
    }

     /**
     * Display crop information page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function cropInformation()
    {
        $cropInfo = InformationPage::where('slug', 'crop-information')->firstOrFail();
        return view('information.crop_info', ['cropInfo' => $cropInfo]);
    }

    /**
     * Display livestock information page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function livestockInformation()
    {
        $livestockInfo = InformationPage::where('slug', 'livestock-information')->firstOrFail();
        return view('information.livestock_info', ['livestockInfo' => $livestockInfo]);
    }
}