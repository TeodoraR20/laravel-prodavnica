<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

            [

                'name'=>'LG mobile',
                'price'=>"200",
                'description'=>"A smart phone.",
                'category'=>'mobile',
                'gallery'=> "https://fdn2.gsmarena.com/vv/bigpic/lg-w41.jpg"
                
            ],

            [

                'name'=>'LG telefon',
                'price'=>"200",
                'description'=>"A smart phone.",
                'category'=>'mobile',
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNjUMh0aV7qgGpElb_YOe_7pQg644oIXdf2Q&usqp=CAU"
            ],
             [
                //https://images.kupujemprodajem.com//photos/oglasi/6/80/71894806/big-71894806_5c3ee8b1359044-60218952UJ670V-940x620.jpg
               
                'name'=>'LG tv',
                'price'=>"200",
                'description'=>"A smart phone.",
                'category'=>'mobile',
               'gallery'=>"https://images.kupujemprodajem.com//photos/oglasi/6/80/71894806/big-71894806_5c3ee8b1359044-60218952UJ670V-940x620.jpg"
                
            ],

            [
              
                'name'=>'LG klima',
                'price'=>"200",
                'description'=>"A smart phone.",
                'category'=>'mobile',
                'gallery'=>"https://www.lg.com/africa/images/split-air-conditioners/md06099357/gallery/medium02.jpg"
                        ]

        ]);
    }
}
