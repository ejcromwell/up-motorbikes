<?php

use Illuminate\Database\Seeder;

class motorbikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motorbikes')->insert([
            'id'  => 1,
            'brand'  => 'yamaha',
            'colour' => 'red',
            'year'   => 2004,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('motorbikes')->insert([
            'id'  => 2,
            'brand'  => 'honda',
            'colour' => 'blue',
            'year'   => 2007,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('motorbikes')->insert([
            'id'  => 3,
            'brand'  => 'honda',
            'colour' => 'black',
            'year'   => 2014,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('motorbikes')->insert([
            'id'  => 4,
            'brand'  => 'suzuki',
            'colour' => 'red',
            'year'   => 2009,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('motorbikes')->insert([
            'id'  => 5,
            'brand'  => 'harley-davidson',
            'colour' => 'black',
            'year'   => 2013,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('motorbikes')->insert([
            'id'  => 6,
            'brand'  => 'ducati',
            'colour' => 'red',
            'year'   => 2007,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
