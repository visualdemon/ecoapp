<?php

namespace Database\Seeders;

use App\Models\MeasurementUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasurementUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $measurementUnits = [
            [
                'name' => 'Kilobyte',
                'abbreviation' => 'KB',
                'value' => 1000000,
            ],
            [
                'name' => 'Megabyte',
                'abbreviation' => 'MB',
                'value' => 1000,
            ],
            [
                'name' => 'Gigabyte',
                'abbreviation' => 'GB',
                'value' => 1,
            ],
            [
                'name' => 'Terabyte',
                'abbreviation' => 'TB',
                'value' => 0.001,
            ],
        ];

        foreach ($measurementUnits as $measurementUnit) {
            MeasurementUnit::create($measurementUnit);
        }
    }
}
//---- Correr esta seeder php artisan db:seed --class=MeasurementUnitsTableSeeder.php
