<?php

namespace App\Http\Controllers\Admin;

use App\AboutUsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        $about_us = $paragraphs->where('location', 'about_us')->get();
        $our_mission = $paragraphs->where('location', 'our_mission')->first();
        $vision = $paragraphs->where('location', 'vision')->first();
        $genexic_title = $paragraphs->where('location', 'genexic')->first();
        $answers_genexic = $paragraphs->where('location', 'genexic_answers')->get();
        $read_more = $paragraphs->where('location', 'read_more')->get();
        $langs = Lang::all();

        $data['icons'] = $icons;
        $data['our_mission'] = $our_mission;
        $data['vision'] = $vision;
        $data['about_us'] = $about_us_page;
        $data['genexic_title'] = $genexic_title;
        $data['answers_genexic'] = $answers_genexic;
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
