<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;
class CommentSeeder extends Seeder
{
    
    public function run(){
        $faker = FakerFactory::create();

        for($i = 0; $i < 13; $i++){
            $data =[
                'content' => vnfaker()->sentences(),
                'product_id' => rand(0,61),
                'user_id' => rand(27,39),
            ];
            DB::table('comments')->insert($data);
        }

    }
}
