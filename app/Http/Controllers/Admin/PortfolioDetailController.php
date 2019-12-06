<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortfolioProject;

class PortfolioDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($lang = 1)
    {
        $portfolio_detail_page = PortfolioProject::with('icons.texts', 'paragraphs')->where('lang_id', $lang)->first();
    }

    public function store(Request $request)
    { }

    public function update(Request $request, $id)
    {
        $portfolio_detail_page = PortfolioProject::find($id);
        $update_data = $request->only($portfolio_detail_page->getFillable());
        $portfolio_detail_page->update($update_data);

        return back()->with('status', 'Successful updated.');
    }
}
