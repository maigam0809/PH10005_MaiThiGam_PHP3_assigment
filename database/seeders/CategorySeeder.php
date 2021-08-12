<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;
class CategorySeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();
        $arrImg = [
            'storage/categories/ballons.png',
            'storage/categories/beer-pong.png',
            'storage/categories/brochette.png',
            'storage/categories/candy.png',
            'storage/categories/champagne.png',
            'storage/categories/check.png',
            'storage/categories/fish.png',
            'storage/categories/gift.png',
            'storage/categories/guitar.png',
            'storage/categories/i_menu_1.png',
            'storage/categories/i_menu_2.png',
            'storage/categories/i_menu_3.png',
            'storage/categories/i_menu_4.png',
            'storage/categories/i_menu_5.png',
            'storage/categories/i_menu_6.png',
            'storage/categories/mask.png',
            'storage/categories/toast (1).png',
            'storage/categories/toast (2).png',
            'storage/categories/toast.png',
        ];

        for($i = 0; $i < 13; $i++){
            $data =[
                'name' => $faker->name,
                'image' => $arrImg[rand(0,18)],
            ];
            DB::table('categories')->insert($data);
        }

    }
}
