<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hashedPassword = Hash::make('neon123');
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@neon.com',
            'password'=>$hashedPassword
        ]);
    }
}
