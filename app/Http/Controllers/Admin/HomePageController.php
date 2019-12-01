<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomePage as HomePageModel;
use App\Lang;
use App\WorkingProccess;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $home_page = HomePageModel::with('icons.texts', 'paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $home_page->paragraphs->where('lang_id', $lang);
        $icons = $home_page->icons;
        $working_processes = WorkingProccess::with('services')->where('lang_id', $lang)->get();

        $our_mission = $paragraphs->where('location', 'our_mission')->first();
        $offer = $paragraphs->where('location', 'offer')->first();
        $working_process = $paragraphs->where('location', 'working_process')->first();
        $vision = $paragraphs->where('location', 'vision')->first();
        $langs = Lang::all();

        $data['icons'] = $icons;
        $data['our_mission'] = $our_mission;
        $data['offer'] = $offer;
        $data['working_process'] = $working_process;
        $data['working_processes'] = $working_processes;
        $data['vision'] = $vision;
        $data['home_page'] = $home_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;

        return view('admin.home-page', compact('data'));
    }

    public function update(Request $request, $id)
    { }
}
