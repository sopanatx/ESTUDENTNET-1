<?php
use App\checkstd;
use App\Checkhistory;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use Rundiz\Thaidate\Thaidate;
Date::setLocale('th');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServi ceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@index')->name('index');
//Route::get('/', function () {
  //  return view('homecheck');
//});
Route::get('/test', function () {
    return view('login');
});

Route::get('/admin', 'adminController@index')->name('admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('result/{std_id}', function ($std_id) {
// $chkshow = checkstd::find($std_id);
// return view('result',compact('chkshow','current','date','yearth'));
// });
Route::get('result/','Controller@resultData')->name('result');
Route::get('admin/form', function () {
    return view('admin/form');
});

Route::get('/ac', function () {
    // echo Checkhistory::find(2);
   // echo Checkhistory::find(28952)->get();
//return response()
  //->json(Checkhistory::findOrFail(28952)->get());
  echo thaidate('วันlที่ j F พ.ศ.Y เวลาH:i:s');
});