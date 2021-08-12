<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;
class ProductSeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();
        $arrImg = [
            'storage/products/08101a8a4dbe04e0563d59b2a7bb751f-320x320.jpg',
            'storage/products/b99644057dfc1f74af9a560f982e1d0f-320x320.jpg',
            'storage/products/ba-roi-rut-suon-huu-co-320x320.jpg',
            'storage/products/banh-hoi-gao-lut-huu-co-bich-chi-200g-320x320.jpg',
            'storage/products/banh-trang-huu-co-16cm-320x320.jpg',
            'storage/products/bap-bo-huu-co-obe-320x320.jpg',
            'storage/products/bap-ngot-huu-co-320x320.jpg',
            'storage/products/bi-ho-lo-huu-co-320x320.jpg',
            'storage/products/bo-huu-co-320x320.jpg',
            'storage/products/Bo-xuong-ga-chicken-bones-320x320.jpg',
            'storage/products/bong-gao-lut-huu-co-rollers-320x320.jpg',
            'storage/products/bun-huu-co-320x320.jpg',
            'storage/products/buoi-da-xanh-huu-co-320x320.jpg',
            'storage/products/ca-bong-duc-phu-quoc-320x320.jpg',
            'storage/products/ca-bop-1-320x320.jpg',
            'storage/products/ca-chim-trang-phu-quoc-320x320.jpg',
            'storage/products/ca-chua-organic-320x320.jpg',
            'storage/products/ca-dia-bong-phu-quoc-320x320.jpg',
            'storage/products/ca-hoi-huu-co-nauy-320x320.jpg',
            'storage/products/ca-hoi-huu-co-nauy-320x320.jpg',
            'storage/products/ca-hoi-huu-co-vikenko-phile-320x320.jpg',
        ];

        for($i = 0; $i < 13; $i++){
            $data =[
                'name' => $faker->name,
                'quantity' =>rand(1,200),
                'price' =>rand(1,1000),
                'category_id' =>rand(1,13),
                'image' => $arrImg[rand(0,13)],
                'description' => $faker->sentence(15),
                'detail' => $faker->text(255),
                'sale' => rand(0,1),
                'status' => rand(0,1),
                'view' =>rand(0,200),
            ];
            DB::table('products')->insert($data);
        }

    }
}
