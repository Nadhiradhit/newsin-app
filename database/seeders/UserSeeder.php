<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            "name" => "Admin",
            "role" => "Admin",
            "email" => "admin@news-in.com",
            "password" => bcrypt("rahasia"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
