<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'name' => 'Moda',
        ]);

        DB::table('menu')->insert([
            'name' => 'Guzellik',
        ]);

        DB::table('menu')->insert([
            'name' => 'Astroloji',
        ]);
    }
}
