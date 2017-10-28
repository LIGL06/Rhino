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
            'age' => '0',
            'address' => 'Blvd. Petrocel Km 1.3, Altamira, Tamaulipas',
            'password' => bcrypt('admin')
        ]);
        DB::table('offices')->insert([
            'address' => 'Domicilio sin Número',
            'name' => 'Escuela Ficticia'
        ]);
        DB::table('schools')->insert([
            'address' => 'Domicilio sin Número',
            'name' => 'Escuela Ficticia'
        ]);
    }
}
