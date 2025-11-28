<?php

namespace Database\Seeders;

use App\Http\Controllers\Coliving;
use App\Models\Coliving as ModelsColiving;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $colivings = [
            [
                'name' => 'Rukita Maison Meruya',
                'image' => 'colivings/rukita-maison-meruya.jpg',
                'location' => 'Meruya Salatan, Kembangan',
                'distance_info' => '2.2 km dari Halte Transjakarta Puri Beta 1',
                'starting_price' => 2300000,
                'current_price' => 2200000,
                'has_discount' => false,
                'discount_type' => 'Diskon sewa 6 bulan',
                'voucher_count' => 3,
                'voucher_discount' => 's.d. 15%',
                'area' => 'jakarta'
            ],
            [
                'name' => 'Rukita The Coral Brawijaya Malang',
                'image' => 'colivings/rukita-coral-brawijaya.jpg',
                'location' => 'Tlogomas, Lovokvaru',
                'distance_info' => '2.5 km dari Universitas Brawijaya',
                'starting_price' => 1750000,
                'current_price' => 1650000,
                'has_discount' => true,
                'discount_type' => 'Diskon sewa 6 bulan',
                'voucher_count' => 3,
                'voucher_discount' => 's.d. 6%',
                'area' => 'jakarta'
            ],
            [
                'name' => 'Rukita Kaiyana House Petoran Solo',
                'image' => 'colivings/rukita-kaiyana-house.jpg',
                'location' => 'Debres, Debres',
                'distance_info' => '27 km dari Stasun Solo Balapan',
                'starting_price' => 1700000,
                'current_price' => 1600000,
                'has_discount' => true,
                'discount_type' => 'Diskon sewa 6 bulan',
                'voucher_count' => 2,
                'voucher_discount' => 's.d. 6%',
                'area' => 'jakarta'
            ],
            [
                'name' => 'Rukita Arroza Mangga Besar',
                'image' => 'colivings/rukita-arroza-mangga-besar.jpg',
                'location' => 'Kartini, Sawah Besar',
                'distance_info' => '47 km dari Stasun MRT Bundaran HI',
                'starting_price' => 2400000,
                'current_price' => 2444000,
                'has_discount' => true,
                'discount_type' => 'Diskon sewa min. 3 bulan',
                'voucher_count' => 1,
                'voucher_discount' => 's.d. 6%',
                'area' => 'jakarta'
            ],
        ];

        foreach ($colivings as $coliving) {
            ModelsColiving::create($coliving);
        }
    }
}
