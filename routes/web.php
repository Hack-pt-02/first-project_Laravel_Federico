<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ContactController;



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

// ROUTE :: DIRECTAMENTE EN VIEW


// Route::get('/home2', function () {
//     // $locals = [
//     //     [1, "Beerwin 1", "Cerverceria muy grande"],
//     //     [3, "Beerwin 3", "Cerverceria muy pequeña"],
//     //     [5, "Beerwin 5", "Cerverceria muy lejo"],
//     //     [6, "Beerwin 6", "Cerverceria muy cerca"],
//     //     [8, "Beerwin 8", "Cerverceria muy cara"],
//     //     [9, "Beerwin 9", "Cerverceria muy barata"],
//     // ];

//     // return view('locals.home', [
//     //     "locals" => $locals,
//     //     "name" => "Federico",
//     //     "companyName" => "Cerveceria"
//     // ]);


// }) -> name("home");


// ROUTE :: PASA POR LE CONTROLLER
Route::get("/home", [LocalController::class, "home"]) -> name("home") ;










// Route::get('/local/{id}', function($id) {

//     $locals = [
//         [1, "Beerwin 1", "Cerverceria muy grande"],
//         [3, "Beerwin 3", "Cerverceria muy pequeña"],
//         [5, "Beerwin 5", "Cerverceria muy lejo"],
//         [6, "Beerwin 6", "Cerverceria muy cerca"],
//         [8, "Beerwin 8", "Cerverceria muy cara"],
//         [9, "Beerwin 9", "Cerverceria muy barata"],
//     ];


//     //dd($locals);

//     return view('locals.local', ["local"=> $locals[$id]]);
// });



Route::get("/local/{id}", [LocalController::class, "show"]) -> name("local") ;
//he cambiado nombre desde local a show











// Route::get("/about", function () {
//     return view('about');
// });

Route::get("/about", [LocalController::class, "about"]) -> name("about");





// Route::get("/contact", function () {
//     return view("contact");
// });

Route::get("/contact", [ContactController::class, "show"]) ->name("contact");
Route::post("/contact",[ContactController::class, "store"]);

// Route::get("/caloriesCalculator", function() {
//     return view("caloriesCalculator");
// }) ->name("caloriesCalculator");

Route::get("/caloriesCalculator", [LocalController::class, "caloriesCalculator"]) ->name("caloriesCalculator");