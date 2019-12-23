<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\ImageText;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $image_id, $text_id = null)
    {
        if ($text_id) {
            $this->updateText($request, $text_id);
        }

        $image = Image::find($image_id);
        $updateData = $request->only($image->getFillable());

        if ($request->hasFile('image')) {

            if (Storage::disk('public')->exists($image->image)) {

                Storage::disk('public')->delete($image->image);
            }

            $image->image = Storage::disk('public')->put('home', $request->image);

            $image->save();
        }

        return back()->with('status', 'Successful updated!');
    }

    public function updateText($request, $text_id)
    {
        $imageText = ImageText::find($text_id);
        $updateData = $request->only($imageText->getFillable());
        $imageText->update($updateData);
    }
}
