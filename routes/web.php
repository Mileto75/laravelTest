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

Route::get('/products/shoes/{product_id?}',
    function ($product_id="01")
    {
        return "Schoen nr $product_id";
    });

Route::get('/admin/{name?}/{role?}',function ($name="mileto",$role="admin")
{
    echo "Welkom $role:$name";
    echo session('error');
})->name("admin");

Route::get('/urltoAdmin',function ()
{
    //echo "<a href='".url("admin")."'>To admin</a>";
    return redirect()->back()->with('error','something wrong');
});



