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
/*
Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/{id}',function ($id) {
return view('profileTemplate');
});
Route::get('/lo', function () {
    return view('login');
});
Route::get('/', function () {
    return view('landingPage');
});*/

Route::get('/user/{id}',function ($id) {
    return view('profileTemplate');
    });
Route::get('/login' , function (){
    return view('login');
});
Route::get('/register' , function(){
    return view('register');
}) ;
Route::get('/', function(){
    return view('landingPage');
});