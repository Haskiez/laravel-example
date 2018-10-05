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

Route::get('/test', function() {
    $cookies = collect([
        ['name' => "chocolate chip", "price" => 1.49],
        ['name' => "oatmeal rasin", "price" => 1.49],
        ['name' => "sugar cookie", "price" => 1.49],
    ]);
    return view('test', compact('cookies'));
});
