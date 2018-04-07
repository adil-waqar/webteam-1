<?php

use App\Page;
use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // User::truncate();
        Page::truncate();

        // factory(User::class, 10)->create();
        factory(Page::class, 5)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
