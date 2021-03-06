<?php

namespace App\Http\Controllers;

use App\ContactPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lang;
use App\Menu;

class ContactUsController extends Controller
{
    public function index($lang = 1)
    {
        $data = array();
        $contact_us_page = ContactPage::where('lang_id', $lang)->first();
        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();

        $data['title'] = preg_split('//u', $contact_us_page->title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['contact_us_page'] = $contact_us_page;
        $data['langs'] = $langs;
        $data['lang'] = $lang;
        $data['menu'] = $menu;

        return view('pages.contact-us', compact('data'));
    }
}
