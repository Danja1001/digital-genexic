<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WorkingProccess;

class WorkingProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $workingProccess = WorkingProccess::find($id);
        $updateData = $request->only($workingProccess->getFillable());
        $workingProccess->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
