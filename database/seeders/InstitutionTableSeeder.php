<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar la primera institución (INDEPENDIENTE) con ID 1
        Institution::create([
            'id' => 1,
            'name' => 'INDEPENDIENTE',
        ]);

        // Otras instituciones
        $institutions = [
            'I.E. SAN LUIS GONZAGA',
            'I.E. TERESIANO',
            'I.E. TÉCNICO GIRARDOT',
            'I.E. SANTANDER',
            'I.E. SAN FRANCISCO DE ASÍS',
        ];

        // Insertar las otras instituciones
        foreach ($institutions as $institutionName) {
            Institution::create([
                'name' => $institutionName,
            ]);
        }
    }
}
// ejecutar este seeder ----php artisan db:seed --class=InstitutionTableSeeder
