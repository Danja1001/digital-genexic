<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $update_data = $request->only($menu->getFillable());
        $menu->update($update_data);

        return back()->with('status', 'Successful updated!');
    }
}
