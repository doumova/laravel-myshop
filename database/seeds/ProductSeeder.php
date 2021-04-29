<?php

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
                'name'=>'honor',
                'price'=>"45000",
                'description'=>"A smartphone with 64Go Ram ",
                'category'=>"mobile",
                'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
            ],

            [
                'name'=>'maison',
                'price'=>"45000",
                'description'=>"pour vos meubles de maison ",
                'category'=>"maison",
                'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
            ],
            [
                    'name'=>'maison',
                    'price'=>"30000",
                    'description'=>"maison de vaccance tres class",
                    'category'=>"immobilier",
                    'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
            ],
            [
                    'name'=>'materiels',
                    'price'=>"30000",
                    'description'=>"demenagement de loyer ",
                    'category'=>"immobilier",
                    'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
            ],
            [
                'name'=>'materiels',
                'price'=>"30000",
                'description'=>"demenagement de loyer ",
                'category'=>"immobilier",
                'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
            ],
            [
                'name'=>'materiels',
                'price'=>"30000",
                'description'=>"demenagement de loyer ",
                'category'=>"immobilier",
                'gallery'=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg",
        ]
            
        ]
    );
    }
}
