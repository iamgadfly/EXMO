<?php

use Illuminate\Support\Facades\Route;

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
    return view('payment');
});
Route::get('/response', function(){
    return view('response');
});
Route::get('/req', function(){
    return view('req');
});
Route::post('api/v1/order', 'req@run');
// Route::post('api/v1/order', function(){
//     return view('Http/Controllers/MAinController@run');
// });

// Route::get('base', function () {
//     return view('base');
// });

//ПЕВРЫЙ ЗАПРОС
// Route::get('routes', function () {
//     $req = DB::table('cards')->get();
//     return view('response', compact('req'));
    
// });
//ВТОРОЙ ЗАПРОС
// Route::get('rates', function () {
//     $rates = DB::table('db_list')->get();
//     return view('rates', compact('rates'));
// });
//Третий запрос на курсы валют НЕ работает
// Route::get('price', function(){
//     return view ('apireq');
// });

// // Route::get(@comonent )

// Route::get('/request', function(){
//     return view('request');
// });


// Route::get('/home', function () {
//  $req = DB::table('cards')->get();
//     return view('home', compact('req'));
// });

