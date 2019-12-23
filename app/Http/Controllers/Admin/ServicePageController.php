<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServicePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id, $lang = 1)
    {
        $data = array();
        $service_page = Service::where('lang_id', $lang)->first();
        $langs = Lang::all();

        $data['service_page'] = $service_page;
        $data['lang'] = $lang;
        $data['langs'] = $langs;

        return view('admin.services-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $services_page = ServicePage::find($id);
        $services_page->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
