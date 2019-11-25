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
      User::truncate();
      $user = [
        'name' => '3DModelling',
        'email' => 'info@geo.com',
        'password' => bcrypt('12345'),
    ];
      User::create($user);
    }
}
