<?php

namespace App\Http\Controllers;

use App\checkstd;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function index()
    {
        return view('result');
    }

    public function autocomplete(Request $request)
    {
        $data = checkstd::select("std_name")
            ->where("std_name", "LIKE", "%{$request->input('std_name')}%")->get;
        return respone()->json($data);
    }
}
