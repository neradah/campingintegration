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

        DB::table('zones')->insert([
            ['name' => 'Quiet Zone', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Family Zone', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Party Zone', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Drunk Zone', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        DB::table('categories')->insert([
            ['name' => 'Music', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Other', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('products')->insert([
            ['name' => 'Breakfast', 'price' => '10.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Single Linen', 'price' => '5.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Double Linen', 'price' => '10.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Parking', 'price' => '20.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Single Air Bed', 'price' => '10.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Double Air Bed', 'price' => '20.00', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);


    }
}
