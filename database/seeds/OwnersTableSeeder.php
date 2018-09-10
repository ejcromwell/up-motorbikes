<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('owners')->insert([
            'id'  => 1,
            'name'  => 'Jake',
            'motorbike_id'  => 4,
            'location' => '51.5034722,-0.0922523',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('owners')->insert([
            'id'  => 2,
            'name'  => 'Paul',
            'motorbike_id'  => 2,
            'location' => '51.5153163,-0.1011231',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('owners')->insert([
            'id'  => 3,
            'name'  => 'Mark',
            'motorbike_id'  => 1,
            'location' => '51.516758, -0.076783',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('owners')->insert([
            'id'  => 4,
            'name'  => 'Paul',
            'motorbike_id'  => 3,
            'location' => '51.5153163,-0.1011231',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
