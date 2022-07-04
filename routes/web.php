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

Route::get("/", function() {
    return redirect() ->route("home");
});

Route::get('/home', function () {

    $locals = [
        [1, "Beerwin 1", "Cerverceria muy grande"],
        [3, "Beerwin 3", "Cerverceria muy pequeña"],
        [5, "Beerwin 5", "Cerverceria muy lejo"],
        [6, "Beerwin 6", "Cerverceria muy cerca"],
        [8, "Beerwin 8", "Cerverceria muy cara"],
        [9, "Beerwin 9", "Cerverceria muy barata"],
    ];

    return view('home', [
        "locals" => $locals,
        "name" => "Federico",
        "companyName" => "Cerveceria"
    ]);
}) -> name("home");




Route::get('/local/{id}', function($id) {

    $locals = [
        [1, "Beerwin 1", "Cerverceria muy grande"],
        [3, "Beerwin 3", "Cerverceria muy pequeña"],
        [5, "Beerwin 5", "Cerverceria muy lejo"],
        [6, "Beerwin 6", "Cerverceria muy cerca"],
        [8, "Beerwin 8", "Cerverceria muy cara"],
        [9, "Beerwin 9", "Cerverceria muy barata"],
    ];

    return view('local', ["local"=> $locals[$id]]);
});


Route::get("/about", function () {
    return view('about');
});


Route::get("/contact", function () {
    return view("contact");
});