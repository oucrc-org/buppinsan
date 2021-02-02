<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Kind;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Board::factory(10)->create();
        Kind::factory(10)->create();
    }
}
