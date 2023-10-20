<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();  
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ["name" => "Admin"],
            ["name" => "Guest"]
        ];

        foreach ($data as $value){
            Role::insert([
                "name" => $value["name"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
