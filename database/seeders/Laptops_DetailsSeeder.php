<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptops_Details;

class Laptops_DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops_details = [
            [
                'laptops_id'=> 1,
                'description' => 'The Lenovo IdeaPad 3 14 is a knockout budget laptop, with excellent performance and a bevy of modern trappings that almost make you forget it rings up at less than $600.',
                'class' => 'Budget',
                'processor' => 'AMD Ryzen 5 5500U',
                'speed' => '2.1 GHz',
                'screen_size' => '14 Inches',
                'color' => 'Abyss Blue',
                'hard_disk_size' => '512 GB',
                'cpu_model' => 'Ryzen 5',
                'ram_memory' => '256 GB',
                'operating_system' => 'Windows 10 Home',
                'card_description' => '	Integrated',
                'graphics_coprocessor' => 'AMD Radeon 7 Graphics',
            ],
            [
                'laptops_id'=> 2,
                'description' => 'Acers Predator Triton 300 SE will make major waves among gaming laptops, with its trim design and punchy RTX 3060 gaming performance at an aggressive price.',
                'class' => 'Gaming',
                'processor' => 'Intel Core i7-11375H',
                'speed' => '3.3 GHz',
                'screen_size' => '14 Inches',
                'color' => 'Silver',
                'hard_disk_size' => '512 GB',
                'cpu_model' => 'Core i7',
                'ram_memory' => '16 GB',
                'operating_system' => 'Windows 11, Windows 10',
                'card_description' => 'Dedicated',
                'graphics_coprocessor' => 'Dedicated NVIDIA GeForce RTX 3050Ti 4GB',
            ],
            [
                'laptops_id'=> 3,
                'description' => 'MSIs Katana GF66 is a well-priced, well-rounded budget gaming laptop that cuts competing models down to size.',
                'class' => 'Ultraportable',
                'processor' => 'Intel Core i7-1165G7',
                'speed' => '2.8 GHz',
                'screen_size' => '15.6 Inches',
                'color' => 'Black',
                'hard_disk_size' => '512 GB',
                'cpu_model' => 'Core i7 Family',
                'ram_memory' => '16 GB',
                'operating_system' => 'Windows 10',
                'card_description' => 'Dedicated',
                'graphics_coprocessor' => 'NVIDIA GeForce RTX 3060 Graphics',
            ],
            ];
            foreach($laptops_details as $laps){
                Laptops_Details::create($laps);
            }
    }
}
