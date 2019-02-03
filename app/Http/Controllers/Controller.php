<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\checkstd;
use App\checkhistory;
use App\Http\Controllers\Encoding;
use Carbon\Carbon;
use Rundiz\Thaidate\Thaidate;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $current = Carbon::now();
        $checkstd = checkstd::all();
        foreach ($checkstd as $chkshow)
{
     $chkshow->std_name;
}
return view('homecheck',compact('std_id'));
        
    }

    public function resultData($std_id)
    {
    //    $chkshow = checkhistory::all();
      //  $chklogshow = Checkhistory::find($std_id);
       $chklogshow = Checkhistory::where('std_id',$std_id)->get();
       $chkshow = checkstd::findOrFail($std_id);
        return view('/result',compact('chkshow'))->with(array('chklogshow'=>$chklogshow));
        
    }
    public function student_history()
    {
        return $this->belongsToMany('App\checkstd');
        return $this->has0ne('App\checkhistory');
      
    }
}
