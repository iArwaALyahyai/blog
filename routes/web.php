<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
   // return view('welcome')->with(['name'=>'2','age'=>'20']);
   $data=[];
   $data['id']=5;
   $data['name']='arwa';

  

});

Route::get('/landing',function(){
    return view('landing');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('index','Front\UserController@getIndex');


Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('a');;

Route::get('/test3/{id?}', function () {
    return 'welcome';
})->name('b');

Route::namespace('Front')->group(function(){
    //all routes onlu access controller or method in folder name Front
    Route::get('users','UserController@showUserName');
});

Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return 'work';
    });
Route::get('show','Front\UserController@showUserName');
Route::get('delete','Front\UserController@showUserName');
Route::get('edit','Front\UserController@showUserName');
Route::get('update','Front\UserController@showUserName');
});


Route::get('check',function(){
    return 'middleware';
})->middleware('auth');

Route::get('second','Admin\SecondController@showString');

Route::group(['namespace'=>'Admin'],function(){
    Route::get('second0','SecondController@showString0');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
});

Route::get('login',function(){
    return 'must be login to access';
});

Route::resource('news','NewsController');

Route::get('news','NewsController@show');
Route::post('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/edit','NewsController@edit');
Route::get('update/{id}','NewsController@edit');
Route::delete('news/{id}','NewsController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/


Auth::routes(['verify'=>True]);
Route::get('/home','HomeController@index')->name('home')->middleware('verified');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return 'home';
});