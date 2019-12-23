<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $create_data = $request->all();
        $service = Service::create($create_data);

        return back()->with('status', 'Successful created!');
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $update_data = $request->only($service->getFillable());
        $service->update($update_data);

        return back()->with('status', 'Succesfull updated.');
    }
}
