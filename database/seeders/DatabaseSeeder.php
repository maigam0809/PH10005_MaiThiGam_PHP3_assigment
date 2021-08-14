<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(CommentSeeder::class);
        // $this->call(InvoiceSeeder::class);
        // $this->call(InvoiceDetailSeeder::class);
        // $this->call(NewSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
