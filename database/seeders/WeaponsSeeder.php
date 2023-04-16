<?php

namespace Database\Seeders;

use App\Models\Enums\WeaponTypes;
use App\Models\Weapon;
use Illuminate\Database\Seeder;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            ['name' => WeaponTypes::FACA->value],
            ['name' => WeaponTypes::PE_DE_CABRA->value],
            ['name' => WeaponTypes::TESOURA->value],
            ['name' => WeaponTypes::PA->value],
            ['name' => WeaponTypes::ARMA_QUIMICA->value],
            ['name' => WeaponTypes::VENENO->value],
            ['name' => WeaponTypes::ESPINGARDA->value],
        ];

        foreach ($weapons as $weapon) {
            Weapon::create($weapon);
        }
    }
}
