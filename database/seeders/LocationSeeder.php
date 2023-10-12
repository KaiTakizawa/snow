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
                'area_name' => 'エイブル白馬五竜スキー場',
                'area_address' => '〒399-9211長野県北安雲郡白馬村神域22184-10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 2,
                'area_id' => 2,
                'latitude' => 36.7850383,
                'longitude' => 138.455369861,
                'area_name' => '竜王スキーパーク',
                'area_address' => '〒381-0405長野県下高井郡山ノ内町竜王11700-26',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 3,
                'area_id' => 3,
                'latitude' => 36.762781083,
                'longitude' => 137.83726627,
                'area_name' => '栂池高原スキー場',
                'area_address' => '〒399-9422長野県北安雲郡小谷村千国12840-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 4,
                'area_id' => 4,
                'latitude' => 36.91767794,
                'longitude' => 138.456602916,
                'area_name' => '野沢温泉スキー場',
                'area_address' => '〒389-2502長野県下高井郡野沢温泉村豊郷7653',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 5,
                'area_id' => 5,
                'latitude' => 36.790756694,
                'longitude' => 138.774655027,
                'area_name' => '苗場スキー場',
                'area_address' => '〒949-6212新潟県南魚沼郡湯沢町三国202',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 6,
                'area_id' => 6,
                'latitude' => 36.983346,
                'longitude' => 138.8294515,
                'area_name' => '舞子スノーリゾート',
                'area_address' => '〒949-6423新潟県南魚沼市舞子2056-108',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 7,
                'area_id' => 7,
                'latitude' => 36.923889,
                'longitude' => 138.813477,
                'area_name' => '神立スノーリゾート',
                'area_address' => '〒949-6102 新潟県南魚沼郡湯沢町神立4121-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
         DB::table('locations')->insert([
                'id' => 8,
                'area_id' => 8,
                'latitude' => 36.949511606,
                'longitude' => 138.776758246,
                'area_name' => 'GALA湯沢スキー場',
                'area_address' => '〒949-6102 新潟県南魚沼郡湯沢町湯沢1039-2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
