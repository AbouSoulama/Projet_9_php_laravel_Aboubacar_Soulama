<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        nationalites::factory()->create([
            
            'nom'=> 'Burkinabè'
            
        ]);
        villes::factory()->create([
            
            'nom'=> 'Bobo-Dioulasso'
            
        ]);
        groupe_sanguins::factory()->create([
            
            'nom'=> 'A'
            
        ]);
        
    }
}
