<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomePage as HomePageModel;
use App\Lang;
use App\PortfolioProject;
use App\WorkingProccess;

class HomePageController extends Controller
{
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
        $portfolio_projects = PortfolioProject::with('images')->where('lang_id', $lang)->get();

        $data['icons'] = $icons;
        $data['our_mission'] = $our_mission;
        $data['offer'] = $offer;
        $data['working_process'] = $working_process;
        $data['working_processes'] = $working_processes;
        $data['vision'] = $vision;
        $data['home_page'] = $home_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;
        $data['portfolio_projects'] = $portfolio_projects;

        return view('pages.home', compact('data'));
    }
}
