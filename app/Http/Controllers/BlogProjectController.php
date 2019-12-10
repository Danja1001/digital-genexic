<?php

namespace App\Http\Controllers;

use App\Lang;
use App\BlogProject;
use Illuminate\Http\Request;

class BlogProjectController extends Controller
{
    public function index($lang = 1, $id)
    {
        $blog_detail_page = BlogProject::with('images.texts')
            ->where('id', $id)
            ->where('lang_id', $lang)->first();

        $icons = $blog_detail_page->images;
        $langs = Lang::all();

        $data['title'] = preg_split('//u', $blog_detail_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['icons'] = $icons;
        $data['blog_detail_page'] = $blog_detail_page;
        $data['langs'] = $langs;
        $data['lang'] = $lang;

        return view('pages.blog-detail', compact('data'));
    }
}
