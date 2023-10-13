<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'date_of_birth' => '1990-01-15',
            'name' => 'Patient 1',
            'owner_id' => 1, // Assign to the owner with ID 1
            'type' => 'Type A',
        ]);

        Patient::create([
            'date_of_birth' => '2005-05-20',
            'name' => 'Patient 2',
            'owner_id' => 2, // Assign to the owner with ID 2
            'type' => 'Type B',
        ]);
    }
}
