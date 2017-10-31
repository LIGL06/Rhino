<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'owner_id' => null,
            'route_name' => 'Ruta sin destino'
        ]);
    }
}
