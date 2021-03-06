<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCategory;
use App\ServicePage;
use App\Lang;
use App\Menu;

class ServicesController extends Controller
{
    public function index($lang = 1)
    {
        $data = array();
        $services_page = ServicePage::with('paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $services_page->paragraphs->where('lang_id', $lang);

        $service_categories = ServiceCategory::with('services')->where('lang_id', $lang)->get();
        $read_more = $paragraphs->where('location', 'read_more');
        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $services_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['service_categories'] = $service_categories;
        $data['read_more'] = $read_more;
        $data['services_page'] = $services_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;
        $data['menu'] = $menu;

        return view('pages.services', compact('data'));
    }
}
