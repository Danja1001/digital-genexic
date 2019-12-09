<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($service_id, $lang = 1)
    {
        $data = array();

        $service = Service::where('lang_id', $lang)->where('id', $service_id)->first();

        $data['title'] = preg_split('//u', $service->head_title, NULL, PREG_SPLIT_NO_EMPTY);
        $data['service'] = $service;
        $data['lang'] = $lang;

        return view('pages.service', compact('data'));
    }
}
