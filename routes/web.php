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
*/
use App\Http\Middleware\CheckAdminLogin;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'/admin/admins','middleware'=>[CheckAdminLogin::class]],function(){

    Route::get('/list','Admin\Admins@adminsList');
    Route::get('/add','Admin\Admins@adminsAddPre');
    Route::post('/add','Admin\Admins@adminsAddDo');
    Route::get('/editAdmins','Admin\Admins@editAdmins');

});

Route::group(['prefix'=>'/admin','middleware'=>[CheckAdminLogin::class]],function(){

    Route::get('/goods/index','Admin\Goods@index');
    Route::get('/index','Admin\Index@index');

});

Route::group(['prefix'=>'/admin','middleware'=>['web']],function(){
    Route::get('/login','Admin\Login@index');
    Route::post('/doLogin','Admin\Login@doLogin');
    Route::post('/logout','Admin\Login@logout');
    Route::get('/err','Admin\Common@err');
});

Route::group(['prefix'=>'/common'],function(){
    Route::post('/uploadPic','Admin\Common@uploadPic');
});
