<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $service_category = ServiceCategory::find($id);
        $update_data = $request->only($service_category->getFillable());
        $service_category->update($update_data);

        return back()->with('status', 'Succesfull updated.');
    }
}
