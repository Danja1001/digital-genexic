<?php

namespace App\Http\Controllers;

use App\Lang;
use App\BlogPage;
use App\BlogProject;
use App\Menu;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($lang = 1)
    {
        $data = array();
        $blog_page = BlogPage::where('lang_id', $lang)->first();
        $blog_projects = BlogProject::with('images')->where('lang_id', $lang)->get();

        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $blog_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['blog_page'] = $blog_page;
        $data['lang'] = $lang;
        $data['blog_projects'] = $blog_projects;
        $data['langs'] = $langs;
        $data['menu'] = $menu;

        return view('pages.blog', compact('data'));
    }
}
