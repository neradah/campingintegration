<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PitchGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pitch_groups')->insert([
            ['name' => '2 Persons Pitched Tent', 'persons' => '2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => '4 Persons Pitched Tent', 'persons' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => '6 Persons Pitched Tent', 'persons' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => '8 Persons Pitched Tent', 'persons' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

    }
}
