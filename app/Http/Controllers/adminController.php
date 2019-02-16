<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminController extends Controller
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
        $users = DB::table('users')->count();
        $stdc = DB::table('student')->count();
        return view('admin/index',compact('users','stdc'));
    }
    public function adduser()
    {
        return view('admin.adduser');
    }
}
