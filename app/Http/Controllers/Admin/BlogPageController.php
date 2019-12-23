<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogPage;
use App\Lang;

class BlogPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $blog_page = BlogPage::where('lang_id', $lang)->first();

        $langs = Lang::all();

        $data['blog_page'] = $blog_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;

        return view('admin.blog-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $blog_page = BlogPage::find($id);
        $updateData = $request->only($blog_page->getFillable());
        $blog_page->update($updateData);

        return back()->with('status', 'Successful updated.');
    }
}
