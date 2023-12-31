<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('locations')->insert([
                'id' => 1,
                'area_id' => 1,
                'latitude' => 36.66581361,
                'longitude' => 137.8210093,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 2,
                'area_id' => 2,
                'latitude' => 36.7850383,
                'longitude' => 138.455369861,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 3,
                'area_id' => 3,
                'latitude' => 36.762781083,
                'longitude' => 137.83726627,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 4,
                'area_id' => 4,
                'latitude' => 36.91767794,
                'longitude' => 138.456602916,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 5,
                'area_id' => 5,
                'latitude' => 36.790756694,
                'longitude' => 138.774655027,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 6,
                'area_id' => 6,
                'latitude' => 36.983346,
                'longitude' => 138.8294515,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('locations')->insert([
                'id' => 7,
                'area_id' => 7,
                'latitude' => 36.9384345,
                'longitude' => 139.7540423,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 8,
                'area_id' => 8,
                'latitude' => 36.7689392,
                'longitude' => 139.108038,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         
        
         DB::table('locations')->insert([
                'id' => 9,
                'area_id' => 9,
                'latitude' => 36.9250312,
                'longitude' => 139.7488482,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 10,
                'area_id' => 10,
                'latitude' => 36.8208638,
                'longitude' => 139.208408,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         
        
        DB::table('locations')->insert([
                'id' => 11,
                'area_id' => 11,
                'latitude' => 36.923889,
                'longitude' => 138.813477,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 12,
                'area_id' => 12,
                'latitude' => 36.949511606,
                'longitude' => 138.776758246,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 13,
                'area_id' => 13,
                'latitude' => 37.0287534,
                'longitude' => 138.8281663,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 14,
                'area_id' => 14,
                'latitude' => 36.5390478,
                'longitude' => 138.1257834,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
