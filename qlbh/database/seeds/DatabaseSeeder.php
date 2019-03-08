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
        // $this->call(UsersTableSeeder::class);
        $this->call(danhmucSeeder::class);
    }


}

class danhmucSeeder extends Seeder{
	
	public function run(){
		$timestamp = date('Y-m-d H:i:s');

		DB::table('danhmucs')->insert([
			['tendanhmuc'=>'banh ngot', 'mota'=>'cac loai banh co duong', 'hinhanh'=>'duong dan anh 3', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
			['tendanhmuc'=>'banh man', 'mota'=>'cac loai banh co muoi', 'hinhanh'=>'duong dan anh 4', 'created_at'=>$timestamp, 'updated_at'=>$timestamp]
		]);
	}
}
