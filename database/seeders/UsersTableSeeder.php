<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            array('cristina', 'cristinapruebas14@gmail.com', 'cristina','1'),
            array('cris', 'cristinapruebas14@outlook.com', 'cristina', '2')
        ];
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'email' => $user[1],
                'password' => Hash::make($user[2]),
                'role_id' => $user[3]
            ]);
        };
    }
}
