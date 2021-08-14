<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;
class NewSeeder extends Seeder
{
    public function run(){
    $faker = FakerFactory::create();
        $arrImg = [
            'storage/news/08101a8a4dbe04e0563d59b2a7bb751f-320x320.jpg',
            'storage/news/b99644057dfc1f74af9a560f982e1d0f-320x320.jpg',
            'storage/news/ba-roi-rut-suon-huu-co-320x320.jpg',
            'storage/news/banh-hoi-gao-lut-huu-co-bich-chi-200g-320x320.jpg',
            'storage/news/banh-trang-huu-co-16cm-320x320.jpg',
            'storage/news/bap-bo-huu-co-obe-320x320.jpg',
        ];

        for($i = 0; $i < 13; $i++){
            $data =[
                'name' => $faker->name,
                'image' => $arrImg[rand(0,5)],
                'description' => vnfaker()->words(),
                'detail' => vnfaker()->sentences(),
            ];
            DB::table('news')->insert($data);
        }
    }
}
