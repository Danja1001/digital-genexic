<?php

namespace App\Http\Controllers\Admin;

use App\AboutUsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lang;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $about_us_page = AboutUsPage::with('icons.texts', 'paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $about_us_page->paragraphs->where('lang_id', $lang);
        $icons = $about_us_page->icons;

        $main_text = $paragraphs->where('location', 'main');
        $our_mission = $paragraphs->where('location', 'sub_main');
        $genexic_title = $paragraphs->where('location', 'genexic')->first();
        $genexic_desc = $paragraphs->where('location', 'genexic_desc');
        $read_more = $paragraphs->where('location', 'read_more');
        $langs = Lang::all();

        $data['icons'] = $icons->where('icon', 1);
        $data['our_mission'] = $our_mission;
        $data['image'] = $icons->where('icon', 0)->first();
        $data['about_us'] = $about_us_page;
        $data['main'] = $main_text;
        $data['genexic_title'] = $genexic_title;
        $data['genexic_desc'] = $genexic_desc;
        $data['read_more'] = $read_more;
        $data['lang'] = $lang;
        $data['langs'] = $langs;


        return view('admin.about-us-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $about_us_page = AboutUsPage::find($id);
        $about_us_page->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
