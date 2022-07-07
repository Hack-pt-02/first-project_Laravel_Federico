<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public $locals = [
        [1, "Beerwin 1", "Cerverceria muy grande"],
        [3, "Beerwin 3", "Cerverceria muy pequeña"],
        [5, "Beerwin 5", "Cerverceria muy lejo"],
        [6, "Beerwin 6", "Cerverceria muy cerca"],
        [8, "Beerwin 8", "Cerverceria muy cara"],
        [9, "Beerwin 9", "Cerverceria muy barata"],
    ];



    public function home() {
           
        return view('locals.home', [
            "locals" => $this->locals,
            "name" => "Federico",
            "companyName" => "Cerveceria",
            "texto" => "Designed By Federico Di Natale",
        ]);
    }


    public function show($id) {                 
        return view('locals.local', [
            "local"=> $this->locals[$id],
            "texto" => "Designed By Federico Di Natale",
        ]);
    }


    public function about() {
        return view("about", [
            "texto" => "Designed By Federico Di Natale",
        ]);
    }


    public function contact() {
        return view("contact" , [
            "texto" => "Designed By Federico Di Natale",
            "title_head" => "contact us"
        ]);
    }
}
