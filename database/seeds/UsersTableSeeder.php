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
        'email' => 'info@geo3dmodelling.com.np',
        'password' => bcrypt('3dmodelling@12345'),
    ];
      User::create($user);
    }
}
