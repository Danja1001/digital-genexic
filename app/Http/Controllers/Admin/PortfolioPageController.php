<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortfolioPage;
use App\Lang;

class PortfolioPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $data = array();
        $portfolio_page = PortfolioPage::with('paragraphs')->where('lang_id', $lang)->first();
        $paragraphs = $portfolio_page->paragraphs->where('lang_id', $lang);

        $read_more = $paragraphs->where('location', 'read_more');
        $langs = Lang::all();

        $data['portfolio_page'] = $portfolio_page;
        $data['read_more'] = $read_more;
        $data['lang'] = $lang;
        $data['langs'] = $langs;

        return view('admin.portfolio-page', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $portfolio_page = PortfolioPage::find($id);
        $updateData = $request->only($portfolio_page->getFillable());
        $portfolio_page->update($updateData);

        return back()->with('status', 'Successful updated.');
    }
}
