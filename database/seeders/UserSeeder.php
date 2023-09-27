<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          DB::table('users')->insert([
                'name' => 'neko',
                'email' => 'neko@neko',
                'email_verified_at' => now(),
                'password' => Hash::make('nekoneko'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'cat',
                'email' => 'cat@cat',
                'email_verified_at' => now(),
                'password' => Hash::make('catcat'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'inu',
                'email' => 'inu@inu',
                'email_verified_at' => now(),
                'password' => Hash::make('inuinu'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'dog',
                'email' => 'dog@dog',
                'email_verified_at' => now(),
                'password' => Hash::make('dogdog'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'hebi',
                'email' => 'hebi@hebi',
                'email_verified_at' => now(),
                'password' =>Hash::make('hebihebi'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'sneke',
                'email' => 'sneke@sneke',
                'email_verified_at' => now(),
                'password' => Hash::make('snekesneke'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'tori',
                'email' => 'tori@tori',
                'email_verified_at' => now(),
                'password' => Hash::make('toritori'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'bird',
                'email' => 'bird@bird',
                'email_verified_at' => now(),
                'password' => Hash::make('birdbird'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
          
         
           DB::table('users')->insert([
                'name' => 'sakana',
                'email' => 'sakana@sakana',
                'email_verified_at' => now(),
                'password' => Hash::make('sakanasakana'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
           DB::table('users')->insert([
                'name' => 'fish',
                'email' => 'fish@fish',
                'email_verified_at' => now(),
                'password' =>Hash::make('fishfish'),
                'remember_token' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
          
        
    }
}
