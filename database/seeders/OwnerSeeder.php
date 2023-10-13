<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::create([
            'email' => 'owner1@example.com',
            'name' => 'Owner 1',
            'phone' => '123-456-7890',
        ]);

        Owner::create([
            'email' => 'owner2@example.com',
            'name' => 'Owner 2',
            'phone' => '987-654-3210',
        ]);
    }
}
