<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Jose Polo',
          'email' => 'joseluispolo29@gmail.com',
          'password' => bcrypt('josepolo29')
        ]);
    }
}
