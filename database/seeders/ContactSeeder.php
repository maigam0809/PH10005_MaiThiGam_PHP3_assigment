<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;

class ContactSeeder extends Seeder
{
   
    public function run()
    {
        $faker = FakerFactory::create();
        for($i = 0; $i < 13; $i++){
            $data =[
                'name' => $faker->name,
                'email' =>vnfaker()->email(),
                'phone' =>vnfaker()->mobilephone(10),
                'status' => rand(0,1),
                'content'=>vnfaker()->sentences(),

            ];
            DB::table('contacts')->insert($data);
        }
    }
}
