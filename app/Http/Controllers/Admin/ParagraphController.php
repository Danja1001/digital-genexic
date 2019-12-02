<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paragraph;

class ParagraphController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();

        $paragraph = Paragraph::find($id);
        $paragraph->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
