<?php

use Illuminate\Database\Seeder;

class apartments2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		'tenchungcu' => 'chungcu1',
    		'diachi'     => 'Ha Noi',
    		'giaban'     => 
    	];

        DB::table('apartments2')->insert($arr);
    }
}
