<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Treatment::create([
            'description' => 'Treatment for Patient 1',
            'notes' => 'This is a sample treatment for Patient 1.',
            'patient_id' => 1, // Assign to the patient with ID 1
            'price' => 100,
        ]);

        Treatment::create([
            'description' => 'Treatment for Patient 2',
            'notes' => 'This is a sample treatment for Patient 2.',
            'patient_id' => 2, // Assign to the patient with ID 2
            'price' => 150,
        ]);
    }
}
