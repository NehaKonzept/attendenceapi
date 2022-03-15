<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'mobile'=>'7600012014',
            'role'=>'1'
        ]);

    }
}
