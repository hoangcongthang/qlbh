<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        \DB::table('danhmucs')->insert([
            'tendanhmuc'=>'BanhMi',
            'created_at'=>$timestamp,
            'updated_at'=>$timestamp
        ]);
    }
}
