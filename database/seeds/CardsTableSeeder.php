<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'user_id' => null,
            'tag' => md5(microtime()),
            'valid_until' => Carbon::now()->addYear(),
            'renew_approval' => false,
        ]);
    }
}
