<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Menu;
use App\PortfolioPage;
use App\PortfolioProject;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index($lang = 1)
    {
        $data = array();

        $data = array();
        $portfolio_page = PortfolioPage::with('paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $portfolio_page->paragraphs->where('lang_id', $lang);
        $portfolio_projects = PortfolioProject::with('images')->where('lang_id', $lang)->get();

        $read_more = $paragraphs->where('location', 'read_more');
        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $portfolio_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['portfolio_page'] = $portfolio_page;
        $data['portfolio_projects'] = $portfolio_projects;
        $data['read_more'] = $read_more;
        $data['lang'] = $lang;
        $data['langs'] = $langs;
        $data['menu'] = $menu;

        return view('pages.portfolio', compact('data'));
    }
}
