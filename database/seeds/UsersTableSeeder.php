<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\User::create([

       'name'=> 'admin',
       'password'=>bcrypt('admin'),
       'email'=>'admin@forum.com',
       'admin' => 1,
       'avatar'=> 'avatar.png'

       ]);

        App\User::create([

       'name'=> 'Abdul',
       'password'=>bcrypt('password'),
       'email'=>'abdul@email.com',
       'avatar'=>'avatar.jpg'

       ]);
    }
}
