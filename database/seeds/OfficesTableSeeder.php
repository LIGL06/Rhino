<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'address' => 'Domicilio sin Número',
            'name' => 'Oficina Ficticia'
        ]);
    }
}
