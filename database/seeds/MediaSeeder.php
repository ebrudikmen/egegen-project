<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // koc
        DB::table('media')->insert([
            'media_path' => 'https://i.hizliresim.com/78tlNW.png',
        ]);

        // boga
        DB::table('media')->insert([
            'media_path' => 'https://i.hizliresim.com/jX7saL.jpg',
        ]);

        // ikizler
        DB::table('media')->insert([
            'media_path' => 'https://i.hizliresim.com/26IN6T.jpg',
        ]);

    }
}
