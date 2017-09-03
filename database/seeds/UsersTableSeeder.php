<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'fname' => 'Administrador',
            'lname' => 'Rhino',
            'email' => 'admin@rhino.com',
            'password' => bcrypt('admin')
        ]);
    }
}
