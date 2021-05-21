<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'id'  			=> 1,
                'name'  			=> 'Admin',
                'username'		=> 'admin',
                'email' 			=> 'admin@perpus.pwl',
                'password'		=> bcrypt('admin'),
                'gambar'			=> NULL,
                'level'			=> 'admin',
                'remember_token'	=> NULL,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              [
                'id'  			=> 2,
                'name'  			=> 'User1',
                'username'		=> 'user1',
                'email' 			=> 'user1@perpus.pwl',
                'password'		=> bcrypt('user1'),
                'gambar'			=> NULL,
                'level'			=> 'user',
                'remember_token'	=> NULL,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ]
        ]);
    }
}
