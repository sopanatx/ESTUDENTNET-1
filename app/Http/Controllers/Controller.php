<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use \MasterRO\LaravelXSSFilter\FilterXSS;
use App\checkstd;
use App\checkhistory;
use App\Http\Controllers\Encoding;
use Carbon\Carbon;
use Rundiz\Thaidate\Thaidate;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
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

    public function resultNewData(Request $request){
        $std_search = $request->input('std_id');
        $chklogshow = Checkhistory::where('std_id',$std_search)->get();
        $chkshow = checkstd::findOrFail($std_search);
        $validate = Validator::make(Input::all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);
      return view('result',compact('chkshow'))->with(array('chklogshow'=>$chklogshow));
       // return csrf_token();
    }
    public function student_history()
    {
        return $this->belongsToMany('App\checkstd');
        return $this->has0ne('App\checkhistory');
      
    }
}
