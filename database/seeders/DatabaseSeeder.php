<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\BoardTag;
use App\Models\Tag;
use App\Models\User;
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
        User::factory(10)->create();
        Board::factory(10)->create();
        BoardTag::factory(10)->create();
        Tag::factory(10)->create();

        $this->call([
            UserTableSeeder::class
        ]);
    }
}
