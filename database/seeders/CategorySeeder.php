<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();  
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ["name" => "Technology"],
            ["name" => "Lifestyle"],
            ["name" => "Game"],
            ["name" => "Wild"],
            ["name" => "Animal"],
        ];

        foreach ($data as $value){
            Category::insert([
                "name" => $value["name"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
