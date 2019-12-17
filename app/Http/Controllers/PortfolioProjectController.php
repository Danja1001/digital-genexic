<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Menu;
use App\PortfolioProject;
use Illuminate\Http\Request;

class PortfolioProjectController extends Controller
{
    public function index($lang = 1, $id)
    {
        $portfolio_detail_page = PortfolioProject::with('images.texts', 'paragraphs')
            ->where('id', $id)
            ->where('lang_id', $lang)->first();
        $icons = $portfolio_detail_page->images;
        $paragraphs = $portfolio_detail_page->paragraphs;
        $project_category = $paragraphs->where('location', 'project_category')->first();
        $project_date = $paragraphs->where('location', 'project_date')->first();
        $project_client = $paragraphs->where('location', 'project_client')->first();
        $project_hours = $paragraphs->where('location', 'project_hours')->first();

        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $portfolio_detail_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['portfolio_detail_page'] = $portfolio_detail_page;
        $data['icons'] = $icons;
        $data['project_category'] = $project_category;
        $data['project_date'] = $project_date;
        $data['project_client'] = $project_client;
        $data['project_hours'] = $project_hours;
        $data['langs'] = $langs;
        $data['lang'] = $lang;
        $data['menu'] = $menu;

        return view('pages.portfolio-detail', compact('data'));
    }
}
