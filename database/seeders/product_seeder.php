<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into products (name, price, category, description, gallery) values (?, ?, ?, ?, ?)', ['Samsung S22R350FHM LED Monitor',14500, 'Monitor', 'Description not available.', 'https://www.itplus.com.bd/wp-content/uploads/2021/06/samsung-s22r350fhm.jpg']);
    }
}
