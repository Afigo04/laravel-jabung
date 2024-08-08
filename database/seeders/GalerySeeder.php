<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage6.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage7.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage8.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage9.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage10.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage11.png",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage12.png",
        ]);
    }
}
