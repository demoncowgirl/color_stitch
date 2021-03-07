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

  }
}
