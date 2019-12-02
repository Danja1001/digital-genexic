<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WorkingProccessServices;

class WorkingProcessServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $workingProcessService = WorkingProccessServices::find($id);
        $workingProcessService->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
