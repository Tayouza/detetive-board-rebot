<?php

namespace Database\Seeders;

use App\Models\Enums\SuspectTypes;
use App\Models\Suspect;
use Illuminate\Database\Seeder;

class SuspectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suspects = [
            SuspectTypes::SARGENTO->name,
            SuspectTypes::FLORISTA->name,
            SuspectTypes::ADVOGADO->name,
            SuspectTypes::CHEF_COZINHA->name,
            SuspectTypes::DANCARINA->name,
            SuspectTypes::MEDICA->name,
            SuspectTypes::COVEIRO->name,
            SuspectTypes::MORDOMO->name,
        ];

        $data = [];

        foreach ($suspects as $suspect) {
            array_push($data, [
                'name' => constant("\App\Models\Enums\SuspectTypes::$suspect")->getName(),
                'color' => constant("\App\Models\Enums\SuspectTypes::$suspect")->getColor(),
                'profession' => constant("\App\Models\Enums\SuspectTypes::$suspect")->getProfession(),
            ]);
        }

        foreach ($data as $dataSuspect) {
            Suspect::create($dataSuspect);
        }
    }
}
