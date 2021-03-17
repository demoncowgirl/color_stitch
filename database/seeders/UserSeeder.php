<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
        'name' => 'Demoncowgirl',
        'email' => 'bethsalvatore2018@gmail.com',
        'password' => 'secret123'
    ]);

    DB::table('users')->insert([
        'name' => 'Test User',
        'email' => 'test@nomail.com',
        'password' => 'secret123'
    ]);

  }
}
