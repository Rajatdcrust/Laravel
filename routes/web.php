<?php

use App\Http\Controllers\CustomerContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customers;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//==============================================================================
// using one to one relationship
Route :: get('/relation',[RelationController :: class,'index']);
Route :: get('/relation/group',[RelationController :: class,'group']);

// ================================================================================
//using localisation
Route ::get('/localisation/{lang}',function($lang){
    App :: setlocale($lang);
    return view('localisationTest');
});

// ******************************************************************************
// understanding session

Route :: get('/set-session',function(Request $request){
    $request->session()->put('user_name','Rajat');
    session()->put('id','1');
    session()->flash('status','success');
   return  redirect('/show-session');


});
Route :: get('/show-session',function(){
    $session = session()->all();
    p($session);
});
Route :: get('/delete-session',function(){
    session()->forget(['user_name','id']);
    return redirect('/show-session');
});

// =========================================================================
Route :: get('/customer/view',[CustomerContoller :: class ,'view']);
Route :: get('/customer/trash',[CustomerContoller :: class ,'trash']);
Route :: get('/collective-form',function(){
    return view('collectiveForm');
});
Route :: get('/upload',function(){
 return view('upload');
});
Route :: post('/upload',function(Request $request){
    $fileName = time()."-".$request->file('file')->getClientOriginalName();
    $request->file('file')->storeAs('/uploads',$fileName);
   });

Route :: get('/customer/delete/{id}',[CustomerContoller :: class ,'delete'])->name('customer.delete');
Route :: get('/customer/forceDelete/{id}',[CustomerContoller :: class ,'forceDelete'])->name('customer.forceDelete');
Route :: get('/customer/restore/{id}',[CustomerContoller :: class ,'restore'])->name('customer.restore');

Route :: get('/customer',[CustomerContoller :: class ,'index'])->name('customer.create');
Route :: post('/customer',[CustomerContoller :: class ,'store']);

//for edit and update
Route :: get('/customer/edit/{id}',[CustomerContoller :: class ,'edit'])->name('customer.edit');
Route :: post('/customer/update/{id}',[CustomerContoller :: class ,'update']);




// ************************to get all rows from tabel *****************
// Route::get('/customer',function(){
//     $customers = Customers :: all();
//     echo '<pre>';
//     print_r($customers->toArray());
// });

//************************calling from controllers******************************
//new way of calling 
Route ::get('/',[DemoController::class,'index']);
//old way
Route :: get('/about','App\Http\Controllers\DemoController@about');

//single action controllers
Route::get('/courses',SingleActionController::class);

//for resource controller
Route::resource('/photo',PhotoController::class);

// ************************************Registration form******************************************
Route :: get('/register',[RegistrationController ::class,'index']);
Route :: post('/register',[RegistrationController :: class,'register']);

//*********************using direct routes**************************************
// Route :: get('/home',function(){
//     return view('home');
// });
// Route :: get('/about',function(){
//     return view('about');
// });
// Route :: get('/courses',function(){
//     return view('courses');
// });
// Route::get('/{name?}', function ($name = null) {
//     $data = compact('name');
//     return view('index')->with($data);
// });


?>