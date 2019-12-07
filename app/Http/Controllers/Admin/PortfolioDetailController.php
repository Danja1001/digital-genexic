<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortfolioProject;
use App\Lang;
use App\Image;
use Illuminate\Support\Facades\Storage;
use App\ImageText;
use App\Paragraph;
use Illuminate\Support\Facades\DB;

class PortfolioDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list($lang = 1)
    {
        $portfolio_projects = PortfolioProject::where('lang_id', $lang)->get();
        $langs = Lang::all();
        $data['langs'] = $langs;
        $data['lang'] = $lang;
        $data['portfolio_projects'] = $portfolio_projects;

        return view('admin.portfolio-project-list', compact('data'));
    }

    public function index($lang = 1, $project_id)
    {
        $portfolio_detail_page = PortfolioProject::with('images.texts', 'paragraphs')
            ->where('id', $project_id)
            ->where('lang_id', $lang)->first();
        $icons = $portfolio_detail_page->images;
        $paragraphs = $portfolio_detail_page->paragraphs;
        $project_category = $paragraphs->where('location', 'project_category')->first();
        $project_date = $paragraphs->where('location', 'project_date')->first();
        $project_client = $paragraphs->where('location', 'project_client')->first();
        $project_hours = $paragraphs->where('location', 'project_hours')->first();

        $langs = Lang::all();

        $data['portfolio_detail_page'] = $portfolio_detail_page;
        $data['icons'] = $icons;
        $data['project_category'] = $project_category;
        $data['project_date'] = $project_date;
        $data['project_client'] = $project_client;
        $data['project_hours'] = $project_hours;
        $data['langs'] = $langs;
        $data['lang'] = $lang;

        return view('admin.portfolio-detail-page', compact('data'));
    }

    public function store(Request $request)
    {
        $request_data = $request->all();
        $portfolio_detail_page = new PortfolioProject;
        $create_data = $request->only($portfolio_detail_page->getFillable());
        $portfolio_detail_page->fill($create_data);
        $portfolio_detail_page->save();

        $paragraphs = $request->get('paragraphs');
        $images = $request->get('images');

        foreach ($paragraphs as $paragraphs_data) {
            $paragraph = new Paragraph;
            $paragraph->lang_id = $request->get('lang_id');
            $paragraph->title = $paragraphs_data['title'];
            $paragraph->text = $paragraphs_data['text'];
            $paragraph->location = $paragraphs_data['location'];
            $paragraph->save();

            DB::table('portfolio_project_to_paragraphs')->insert([
                'pproj_id' => $portfolio_detail_page->id,
                'paragraph_id' => $paragraph->id
            ]);
        }

        $image = new Image;
        $image->image = Storage::disk('public')->put('home', $request_data['images']['first']);
        $image->save();

        DB::table('portfolio_project_to_images')->insert([
            'port_proj_id' => $portfolio_detail_page->id,
            'image_id' => $image->id
        ]);

        $image = new Image;
        $image->image = Storage::disk('public')->put('home', $request_data['images']['second']);
        $image->save();

        DB::table('portfolio_project_to_images')->insert([
            'port_proj_id' => $portfolio_detail_page->id,
            'image_id' => $image->id
        ]);

        return back()->with('status', 'Successful stored.');
    }

    public function update(Request $request, $id)
    {
        $portfolio_detail_page = PortfolioProject::find($id);
        $update_data = $request->only($portfolio_detail_page->getFillable());
        $portfolio_detail_page->update($update_data);

        return back()->with('status', 'Successful updated.');
    }
}
