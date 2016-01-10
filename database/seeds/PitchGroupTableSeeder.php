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
        DB::table('pitches')->insert([
            ['name' => 'Pre Pitched', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Glamping', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pitch Tent', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pitch Camper-van', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

    }
}
