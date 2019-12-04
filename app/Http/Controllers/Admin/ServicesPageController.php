<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCategory;
use App\ServicePage;
use App\Lang;

class ServicesPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $services_page = ServicePage::with('paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $services_page->paragraphs->where('lang_id', $lang);

        $service_categories = ServiceCategory::with('services')->where('lang_id', $lang)->get();
        $read_more = $paragraphs->where('location', 'read_more');
        $langs = Lang::all();


        $data['service_categories'] = $service_categories;
        $data['read_more'] = $read_more;
        $data['services_page'] = $services_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;

        return view('admin.services-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $services_page = ServicePage::find($id);
        $updateData = $request->only($services_page->getFillable());
        $services_page->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
