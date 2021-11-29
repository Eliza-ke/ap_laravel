<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        //$this->call([
        //    UserSeeder::class,
        //    PostSeeder::class,
        //]);
    }
}
