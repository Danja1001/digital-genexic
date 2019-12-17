<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Menu;
use App\BlogProject;
use Illuminate\Http\Request;

class BlogProjectController extends Controller
{
    public function index($lang = 1, $id)
    {
        $blog_detail_page = BlogProject::with('images.texts')
            ->where('id', $id)
            ->where('lang_id', $lang)->first();
        $blog_projects = BlogProject::where('lang_id', $lang)->get();

        $icons = $blog_detail_page->images;
        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $blog_detail_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['icons'] = $icons;
        $data['blog_detail_page'] = $blog_detail_page;
        $data['blog_projects'] = $blog_projects;
        $data['langs'] = $langs;
        $data['lang'] = $lang;
        $data['menu'] = $menu;

        return view('pages.blog-detail', compact('data'));
    }
}
