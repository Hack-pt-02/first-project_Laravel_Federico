<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locals = [
            [1, "Beerwin 1", "Cerverceria muy grande"],
            [3, "Beerwin 3", "Cerverceria muy pequeña"],
            [5, "Beerwin 5", "Cerverceria muy lejo"],
            [6, "Beerwin 6", "Cerverceria muy cerca"],
            [8, "Beerwin 8", "Cerverceria muy cara"],
            [9, "Beerwin 9", "Cerverceria muy barata"],
    ];
        foreach($locals as $local) {

            DB::table("locals")-> insert([
                "name" => $local[1],
                "description" => $local[2],
                "url" => "url"
            ]);
        }
    }
}
