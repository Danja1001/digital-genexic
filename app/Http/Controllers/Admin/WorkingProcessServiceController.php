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
        $workingProcessService = WorkingProccessServices::find($id);
        $updateData = $request->only($workingProcessService->getFillable());
        $workingProcessService->update($updateData);

        return back()->with('status', 'Successful updated!');
    }
}
