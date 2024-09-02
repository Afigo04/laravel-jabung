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
            'photo_path' => "dummyImage7.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage8.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage9.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage10.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage11.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage12.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage13.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage14.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage15.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage16.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage17.jpg",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage18.jpg",
        ]);
    }
}
