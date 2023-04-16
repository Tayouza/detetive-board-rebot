<?php

namespace Database\Seeders;

use App\Models\Enums\LocationTypes;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => LocationTypes::RESTAURANTE->value],
            ['name' => LocationTypes::PREFEITURA->value],
            ['name' => LocationTypes::HOSPITAL->value],
            ['name' => LocationTypes::FLORICULTURA->value],
            ['name' => LocationTypes::PRACA_CENTRAL->value],
            ['name' => LocationTypes::MANSAO->value],
            ['name' => LocationTypes::HOTEL->value],
            ['name' => LocationTypes::CEMITERIO->value],
            ['name' => LocationTypes::ESTACAO_TREM->value],
            ['name' => LocationTypes::BOATE->value],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
