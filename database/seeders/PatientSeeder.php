<?php 
// database/seeders/PatientsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use the PatientFactory to seed the "patients" table
        Patient::factory()->count(10)->create();
    }
}

?>