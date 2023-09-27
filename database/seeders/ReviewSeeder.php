<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 DB::table('reviews')->insert([
                'user_id' => 1,
                'area_id' => 1,
                'comment' => '-------------------------',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
    }
}
