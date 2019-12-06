<?php

namespace App\Http\Controllers\Admin;

use App\BlogProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $blog_detail_page = BlogProject::with('icons.texts', 'paragraphs')->where('lang_id', $lang)->first();
    }

    public function store(Request $request)
    { }

    public function update(Request $request, $id)
    {
        $blog_detail_page = BlogProject::find($id);
        $update_data = $request->only($blog_detail_page->getFillable());
        $blog_detail_page->update($update_data);

        return back()->with('status', 'Successful updated.');
    }
}
