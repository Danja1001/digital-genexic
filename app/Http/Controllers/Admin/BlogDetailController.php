<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
