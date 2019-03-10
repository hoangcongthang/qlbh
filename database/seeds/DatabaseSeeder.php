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

        
        
        DB::table('sanphams')->insert([
            [
                'tensanpham'=>'heart-shaped candies',
                'madanhmuc'=>'46',
                'mota'=>'heart-shaped candies heart-shaped candies',
                'gia'=>'10000',
                'hinhanh'=>'img/sweet/assorted-hear-shape-candies-on-white-bowl.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'raspberry and chocolate',
                'madanhmuc'=>'46',
                'mota'=>'raspberry and chocolate raspberry and chocolate',
                'gia'=>'15000',
                'hinhanh'=>'img/sweet/raspberry-and-chocolate.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'color candies',
                'madanhmuc'=>'46',
                'mota'=>'multicolored cake',
                'gia'=>'1500',
                'hinhanh'=>'img/sweet/assorted-color-candies.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
           
            [
                'tensanpham'=>'ice cream popsicles',
                'madanhmuc'=>'46',
                'mota'=>'ice cream popsiclesice cream popsiclesice cream popsiclesice cream popsicles',
                'gia'=>'19000',
                'hinhanh'=>'img/sweet/flat-lay-photography-of-ice-cream-popsicles.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'gummy worms',
                'madanhmuc'=>'46',
                'mota'=>'agummy wormsgummy wormsgummy wormsgummy worms',
                'gia'=>'122000',
                'hinhanh'=>'img/sweet/gummy-worms.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'Nestle chocolate',
                'madanhmuc'=>'46',
                'mota'=>'Nestle chocolate',
                'gia'=>'12000',
                'hinhanh'=>'img/sweet/Nestle-chocolate.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'raspberry and chocolate',
                'madanhmuc'=>'46',
                'mota'=>'raspberry and chocolate raspberry and chocolate raspberry and chocolate',
                'gia'=>'12000',
                'hinhanh'=>'img/sweet/raspberry-and-chocolate.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'assorted chocolates',
                'madanhmuc'=>'46',
                'mota'=>'assorted chocolates',
                'gia'=>'12000',
                'hinhanh'=>'img/sweet/assorted-chocolates-in-box.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'assorted color bead',
                'madanhmuc'=>'46',
                'mota'=>'assorted color beadassorted color beadassorted color bead',
                'gia'=>'10000',
                'hinhanh'=>'img/sweet/assorted-color-bead-lot.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'jelly tubelot',
                'madanhmuc'=>'46',
                'mota'=>'jelly tubelotjelly tubelotjelly tubelot',
                'gia'=>'12000',
                'hinhanh'=>'img/sweet/jelly-tube-lot.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],



            [
                'tensanpham'=>'pink miringues',
                'madanhmuc'=>'45',
                'mota'=>'heart-shaped candies heart-shaped candies',
                'gia'=>'10000',
                'hinhanh'=>'img/brakery/pink-miringues.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'Peggy Porschen',
                'madanhmuc'=>'45',
                'mota'=>'raspberry and chocolate raspberry and chocolate',
                'gia'=>'15000',
                'hinhanh'=>'img/brakery/two-macarons-in-square-white-plate.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'yongbo sweet cakes',
                'madanhmuc'=>'45',
                'mota'=>'multicolored cake',
                'gia'=>'1500',
                'hinhanh'=>'img/brakery/samuel-yongbo-kwon-254178-unsplash.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
           
            [
                'tensanpham'=>'mixed doughnuts',
                'madanhmuc'=>'45',
                'mota'=>'ice cream popsiclesice cream popsiclesice cream popsiclesice cream popsicles',
                'gia'=>'19000',
                'hinhanh'=>'img/brakery/pink,-blue,-and-chocolate-with-sprinkles-doughnuts-on-table.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'multicolored cake',
                'madanhmuc'=>'45',
                'mota'=>'agummy wormsgummy wormsgummy wormsgummy worms',
                'gia'=>'23000',
                'hinhanh'=>'img/brakery/person-holding-round-gray-and-multicolored-container.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'multicolored cake',
                'madanhmuc'=>'45',
                'mota'=>'Nestle chocolate',
                'gia'=>'12000',
                'hinhanh'=>'img/brakery/person-holding-round-gray-and-multicolored-container.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'Brown cookie',
                'madanhmuc'=>'45',
                'mota'=>'raspberry and chocolate raspberry and chocolate raspberry and chocolate',
                'gia'=>'12000',
                'hinhanh'=>'img/brakery/person-holding-brown-cookie.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'baked donuts',
                'madanhmuc'=>'45',
                'mota'=>'assorted chocolates',
                'gia'=>'12000',
                'hinhanh'=>'img/brakery/four-baked-donuts.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'baked pastry',
                'madanhmuc'=>'45',
                'mota'=>'assorted color beadassorted color beadassorted color bead',
                'gia'=>'15000',
                'hinhanh'=>'img/brakery/closeup-photo-of-baked-pastry.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'tensanpham'=>'baked cupcakes',
                'madanhmuc'=>'45',
                'mota'=>'baked cupcakes ',
                'gia'=>'12000',
                'hinhanh'=>'img/brakery/baked-cupcakes-on-brown-wooden-table.jpg',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
            
        ]);
    }
}
