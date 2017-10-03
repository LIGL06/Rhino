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
            'name' => 'Administrador',
            'email' => 'admin@rhino.com',
            'age' => '0',
            'address' => 'Blvd. Petrocel Km 1.3, Altamira, Tamaulipas',
            'password' => bcrypt('admin')
        ]);
    }
}
