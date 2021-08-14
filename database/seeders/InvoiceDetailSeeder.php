<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Buihuycuong\Vnfaker\VNFaker;
use DB;
class InvoiceDetailSeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();

        for($i = 0; $i < 13; $i++){
            $data =[
                'invoice_id' => rand(1,26),
                'product_id' => rand(1,62),
                'quantity' =>rand(1,20),
                'unit_price' => vnfaker()->numberBetween(),
            ];
            DB::table('invoices_details')->insert($data);
        }

    }
}
