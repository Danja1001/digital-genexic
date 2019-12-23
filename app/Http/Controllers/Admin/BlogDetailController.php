<?php

namespace App\Http\Controllers\Admin;

use App\BlogProject;
use App\BlogProjectToImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\ImageText;
use App\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list($lang = 1)
    {
        $blog_projects = BlogProject::where('lang_id', $lang)->get();
        $langs = Lang::all();
        $data['langs'] = $langs;
        $data['lang'] = $lang;
        $data['blog_projects'] = $blog_projects;

        return view('admin.blog-project-list', compact('data'));
    }

    public function index($lang = 1, $project_id)
    {
        $blog_detail_page = BlogProject::with('images.texts')
            ->where('id', $project_id)
            ->where('lang_id', $lang)->first();

        $icons = $blog_detail_page->images;
        $langs = Lang::all();

        $data['icons'] = $icons;
        $data['blog_detail_page'] = $blog_detail_page;
        $data['langs'] = $langs;
        $data['lang'] = $lang;

        return view('admin.blog-detail-page', compact('data'));
    }

    public function store(Request $request)
    {
        $image = new Image;
        if ($request->hasFile('image')) {
            $image->image = Storage::disk('public')->put('home', $request->image);

            $image->save();
        }

        $blog_detail_page = new BlogProject;
        $create_data = $request->only($blog_detail_page->getFillable());
        $blog_detail_page->fill($create_data);
        $blog_detail_page->save();

        DB::table('blog_project_to_images')->insert([
            'blog_project_id' => $blog_detail_page->id,
            'image_id' => $image->id
        ]);

        ImageText::create([
            'image_id' => $image->id,
            'lang_id' => $request->get('lang_id'),
            'title' => $request->get('image_title'),
            'text' => $request->get('image_text')
        ]);

        return back()->with('status', 'Successful stored.');
    }

    public function update(Request $request, $id)
    {
        $blog_detail_page = BlogProject::find($id);
        $update_data = $request->only($blog_detail_page->getFillable());
        $blog_detail_page->update($update_data);

        return back()->with('status', 'Successful updated.');
    }
}
