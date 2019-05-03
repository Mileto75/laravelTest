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

Route::get('/', function () {
    return view('welcome');
});

route::get('/ToAdmin',function ()
{
   echo "<a href='".route('adminPage')."'>Adminpagina</a>";
});

Route::get('/admin','AdminController@index')->name("adminPage");
Route::get('/admin/createAdmin',"AdminController@createAdmin")->name('createAdminPage');

//lotto routes
route::get('/lotto','LottoController@index')->name('lottoHome');



