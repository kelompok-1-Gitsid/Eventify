<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('customers')->insert([
        //     'fullname' => Str::random(20),
        //     'username' => Str::random(10),
        //     'address' => 'jalan kemenyan',
        //     'phone' => '08234123141',
        //     'email' => Str::random(5) . '@example.com',
        //     'password' => Hash::make('password'),
        //     'id_role' => '3'
        // ]);


        // DB::table('vendors')->insert([
        //     'fullname' => Str::random(20),
        //     'username' => Str::random(10),
        //     'address' => 'jalan kemenyan',
        //     'phone' => '08234123141',
        //     'email' => Str::random(5) . '@example.com',
        //     'password' => Hash::make('password'),
        //     'id_category' => '1',
        //     'id_role' => '2'
        // ]);

        // DB::table('vendors')->insert([
        //     'fullname' => Str::random(20),
        //     'username' => Str::random(10),
        //     'address' => 'jalan kemenyan',
        //     'phone' => '08234123141',
        //     'email' => Str::random(5) . '@example.com',
        //     'password' => Hash::make('password'),
        //     'id_category' => '2',
        //     'id_role' => '2'
        // ]);

        // DB::table('vendors')->insert([
        //     'fullname' => Str::random(20),
        //     'username' => Str::random(10),
        //     'address' => 'jalan kemenyan',
        //     'phone' => '08234123141',
        //     'email' => Str::random(5) . '@example.com',
        //     'password' => Hash::make('password'),
        //     'id_category' => '4',
        //     'id_role' => '2'
        // ]);

        DB::table('vendors')->insert([
            'fullname' => Str::random(20),
            'username' => Str::random(10),
            'address' => 'jalan kemenyan',
            'phone' => '08234123141',
            'email' => Str::random(5) . '@example.com',
            'password' => Hash::make('password'),
            'id_category' => '5',
            'id_role' => '2'
        ]);

        // DB::table('admins')->insert([
        //     'username' => Str::random(20),
        //     'password' => Hash::make('password'),
        //     'id_role' => '1'
        // ]);
    }
}
