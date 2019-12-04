<?php

namespace App\Http\Controllers\Admin;

use App\ContactPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lang;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $contact_us_page = ContactPage::where('lang_id', $lang)->first();
        $langs = Lang::all();

        $data['contact_us_page'] = $contact_us_page;
        $data['langs'] = $langs;

        return view('admin.contact-us-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $contact_us_page = ContactPage::find($id);
        $updateData = $request->only($contact_us_page->getFillable());
        $contact_us_page->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
