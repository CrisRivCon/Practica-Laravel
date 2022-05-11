<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages=[
            array('1', 'cristinapruebas14@gmail.com', 'Mensaje 1'),
            array('1', 'cristinapruebas14@gmail.com', 'Mensaje 2'),
            array('2', 'cristinapruebas14@outlook.com', 'Mensaje 3')
        ];
        foreach ($messages as $message)
        {
          DB::table('messages')->insert([
             'user_id' => $message[0],
              'email'=>$message[1],
              'mensaje'=>$message[2]
          ]);
        }
    }
}
