<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\ImageText;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $image_id, $text_id = null)
    {
        $updateData = $request->all();
        if ($text_id) {
            $this->updateText($updateData, $text_id);
        }

        $image = Image::find($image_id);

        if ($request->hasFile('image')) {

            if (Storage::disk('uploads')->exists($image->image)) {

                Storage::disk('uploads')->delete($image->image);
            }

            $image->image = Storage::disk('uploads')->put('home', $request->image);

            $image->save();
        }

        return back()->with('status', 'Successful updated!');
    }

    public function updateText($updateData, $text_id)
    {
        $imageText = ImageText::find($text_id);
        $imageText->update($updateData);
    }
}
