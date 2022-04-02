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

                'name'=>'Covek po imenu Uve - Peter Handke',
                'price'=>"1099",
                'description'=>"
                Izvanredno! Smejaćete se, plakati i otkriti saosećanje za džangrizala u svom životu. Takođe, poželećete da se odselite u Skandinaviju, gde je sve nekako simpatičnije.“ People",
                'category'=>'komedija',
                'gallery'=> "https://www.laguna.rs/_img/korice/3366/covek_po_imenu_uve_v.jpg"
                
            ]

            

            

        ]);
    }
}
