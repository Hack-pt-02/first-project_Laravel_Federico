<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    // public $locals = [
    //     [1, "Beerwin 1", "Cerverceria muy grande"],
    //     [3, "Beerwin 3", "Cerverceria muy pequeña"],
    //     [5, "Beerwin 5", "Cerverceria muy lejo"],
    //     [6, "Beerwin 6", "Cerverceria muy cerca"],
    //     [8, "Beerwin 8", "Cerverceria muy cara"],
    //     [9, "Beerwin 9", "Cerverceria muy barata"],
    // ];

    public $a = true;
    public $food = "banana";



    public function home() {

        $locals = DB::table("locals") ->get();
        //dd($locals);

        return view('locals.home', [
            "locals" => $locals,
            "name" => "Federico",
            "companyName" => "Cerveceria",
            "texto" => "Designed By Federico Di Natale",
        ]);
    }

    public function create() {
        return view("locals.create");
    }

    public function store(Request $request) {

        $image = $request->file("img") ->store("public/locals");

        DB::table("locals") ->insert([
            "name" => $request->name,
            "description" => $request->get("message"),
            "url" => Storage::url($image)

            //puedo inserir un valor constante: 
            // "url" => ""
        ]);
        if ($request->name != "" && $request->message != "") {
            return back()->with("success", "hemos recibido tu cerveceria");
        } else {
            return back()->with("error", "Tieme que reienar todos los campos");
            
        }
    }

    public function show($id) {  
        $objlocals = DB::table("locals")->where("id", "=", $id) -> first(); 
        //dd($locals);      

        return view('locals.local', [
            "objlocals"=> $objlocals,
            "texto" => "Designed By Federico Di Natale",
        ]);
    }



    public function about() {
        return view("about", [
            "texto" => "Designed By Federico Di Natale",
        ]);
    }


    public function caloriesCalculator() {

        if ($this->food == 0){
            $a = false;
        }
    
        $curl = curl_init();
    
    $url = "https://edamam-food-and-grocery-database.p.rapidapi.com/parser?ingr=" . $this->food;
    
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: edamam-food-and-grocery-database.p.rapidapi.com",
            "X-RapidAPI-Key: 93b6ad6808msheb2f9af915c4ab6p16506ejsn4cf79178e76f"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
 
    $data = json_decode($response);
    //echo $data->text;
    $calories = $data->hints[0]->food->nutrients->ENERC_KCAL;
    $protein = $data->hints[0]->food->nutrients->PROCNT;
    $fat = $data->hints[0]->food->nutrients->FAT;
    $carbs = $data->hints[0]->food->nutrients->ENERC_KCAL;
    $fiber = $data->hints[0]->food->nutrients->ENERC_KCAL;
    
   
        return view("caloriesCalculator", [
            "a" => $this->a,
            'food' => $this->food,
            "calories" => $calories,
            "protein" => $protein, 
            "fat" => $fat, 
            "carbs" => $carbs, 
            "fiber" => $fiber
        ]);
    }
}
