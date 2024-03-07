<?php

use Illuminate\Database\Seeder;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kits')->insert([ 
            'kitName' => 'StarterKit'
        ]);

        DB::table('kits')->insert([ 
            'kitName' => 'Educational Robotics Kit'
        ]);

        DB::table('kits')->insert([ 
            'kitName' => 'Kit5'
        ]);
    }
}
