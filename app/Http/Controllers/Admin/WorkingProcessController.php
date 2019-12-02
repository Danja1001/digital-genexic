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
        $updateData = $request->all();
        $workingProccess = WorkingProccess::find($id);
        $workingProccess->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
