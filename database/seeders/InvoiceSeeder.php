<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;
class InvoiceSeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();

        for($i = 0; $i < 13; $i++){
            $data =[
                'user_id' => rand(27,39),
                'phone_number' => vnfaker()->mobilephone(10),
                'address' =>vnfaker()->city(),
                'total_price' => vnfaker()->numberBetween(),
                'status' =>rand(1,6),
            ];
            DB::table('invoices')->insert($data);
        }

    }
}
