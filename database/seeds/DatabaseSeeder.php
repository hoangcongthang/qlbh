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
        // $this->call(danhmucSeeder::class);
        $this->call(sanphamSeeder::class);
    }


}

class danhmucSeeder extends Seeder{
	
	public function run(){
		$timestamp = date('Y-m-d H:i:s');
		DB::table('danhmucs')->insert([
			['tendanhmuc'=>'banh ngot', 'mota'=>'cac loai banh co duong', 'hinhanh'=>'source/images/pink-miringues.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
			['tendanhmuc'=>'banh man', 'mota'=>'cac loai banh co muoi', 'hinhanh'=>'source/images/baked-cookies.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp]
		]);
	}
}

class sanphamSeeder extends Seeder{
    public function run(){
        $timestamp = date('Y-m-d H:i:s');
        DB::table('sanphams')->insert([
            ['tensanpham'=>'pink miringues', 'madanhmuc'=>1, 'mota'=>'banh miringues mau hong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/pink-miringues.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'baked cookies', 'madanhmuc'=>2, 'mota'=>'banh nuong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/baked-cookies.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'pink miringues', 'madanhmuc'=>1, 'mota'=>'banh miringues mau hong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/pink-miringues.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'baked cookies', 'madanhmuc'=>2, 'mota'=>'banh nuong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/baked-cookies.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'pink miringues', 'madanhmuc'=>1, 'mota'=>'banh miringues mau hong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/pink-miringues.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'baked cookies', 'madanhmuc'=>2, 'mota'=>'banh nuong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/baked-cookies.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'pink miringues', 'madanhmuc'=>1, 'mota'=>'banh miringues mau hong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/pink-miringues.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'baked cookies', 'madanhmuc'=>2, 'mota'=>'banh nuong', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/baked-cookies.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['tensanpham'=>'eclair', 'madanhmuc'=>1, 'mota'=>'banh eclair', 'gianhap'=>4.5, 'giaban'=>8.99, 'hinhanh'=>'source/images/Eclair.jpg', 'created_at'=>$timestamp, 'updated_at'=>$timestamp]
        ]);
    }
}

