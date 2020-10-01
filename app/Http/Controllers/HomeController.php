<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


use App\checkstd;
use App\checkhistory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $stuid = $request->stu_id;
        $chkshow = checkstd::findOrFail($stuid);
        return view('result')->with(array('chklogshow'=>$chklogshow,'chkshow '=>$chkshow ));
    }


}
