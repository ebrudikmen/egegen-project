<?php

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
        $this->call(ContentSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
