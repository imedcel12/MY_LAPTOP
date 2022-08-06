<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptops;

class LaptopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops = [
            [
                'brand' => 'Lenovo',
                'series' => 'Ideapad 3 14 Laptop',
            ],
            [
                'brand' => 'Acer',
                'series' => 'Acer Predator Triton 300 SE 14 144Hz RTX 3050 Ti',
            ],
            [
                'brand' => 'MSI',
                'series' => 'MSI Katana GF66',
            ],
            ];
            foreach($laptops as $lap){
                Laptops::create($lap);
            }
    }
}
