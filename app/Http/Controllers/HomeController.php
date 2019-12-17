<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Lang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($lang = 1)
    {
        $data = array();
        $langs = Lang::all();
        $menu = Menu::where('lang_id', $lang)->get();
        $data['menu'] = $menu;
        $data['langs'] = $langs;

        return view('home', compact('data'));
    }
}
