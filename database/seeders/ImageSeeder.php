<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
                'area_id' => 1,
                'img_url' => '1111111111111111111',
         ]);
         
          DB::table('images')->insert([
                'area_id' => 2,
                'img_url' => '2222222222222222222222',
         ]);
          DB::table('images')->insert([
                'area_id' => 3,
                'img_url' => '4333333333333333333',
                
         ]); DB::table('images')->insert([
                'area_id' => 4,
                'img_url' => '444444444444444444444444444444',
                
         ]); DB::table('images')->insert([
                'area_id' => 5,
                'img_url' => '55555555555555555555555555555',
                
         ]); DB::table('images')->insert([
                'area_id' => 6,
                'img_url' => '66666666666666666666666',
                
         ]); DB::table('images')->insert([
                'area_id' => 7,
                'img_url' => '77777777777777777777777777777',
                
         ]); DB::table('images')->insert([
                'area_id' => 8,
                'img_url' => '88888888888888888888888888',
         ]);
    }
    
}
