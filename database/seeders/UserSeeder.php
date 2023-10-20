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
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@news.ac.id',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
