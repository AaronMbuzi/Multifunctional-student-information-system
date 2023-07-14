<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $pizzaList= [['type'=>'vegiterian','base'=>'crust'],
    ['type'=>'meat', 'base'=>'crust'],
    ['type'=>'huwaien', 'base'=>'crust'],
    ['type'=>'chicken', 'base'=>'crust']];
    return view('test', $pizzaList);
});
Route::get('/bio', function () {
    return view('bio');
});
Route::get('/accomodation', function () {
    return view('accomodation');
});
Route::get('/finances', function () {
    return view('finances');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/results', function () {
    return view('results');
});