<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the users table seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
    }
}