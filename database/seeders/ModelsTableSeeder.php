<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('models')->insert([
            // Toyota models
            ['maker_id' => 1, 'name' => 'Camry'],
            ['maker_id' => 1, 'name' => 'Corolla'],
            ['maker_id' => 1, 'name' => 'Prius'],
            ['maker_id' => 1, 'name' => 'RAV4'],
            ['maker_id' => 1, 'name' => 'Highlander'],

            // Honda models
            ['maker_id' => 2, 'name' => 'Civic'],
            ['maker_id' => 2, 'name' => 'Accord'],
            ['maker_id' => 2, 'name' => 'CR-V'],
            ['maker_id' => 2, 'name' => 'Pilot'],
            ['maker_id' => 2, 'name' => 'Fit'],

            // Ford models
            ['maker_id' => 3, 'name' => 'F-150'],
            ['maker_id' => 3, 'name' => 'Mustang'],
            ['maker_id' => 3, 'name' => 'Explorer'],
            ['maker_id' => 3, 'name' => 'Escape'],
            ['maker_id' => 3, 'name' => 'Focus'],

            // Chevrolet models
            ['maker_id' => 4, 'name' => 'Silverado'],
            ['maker_id' => 4, 'name' => 'Malibu'],
            ['maker_id' => 4, 'name' => 'Equinox'],
            ['maker_id' => 4, 'name' => 'Tahoe'],
            ['maker_id' => 4, 'name' => 'Camaro'],

            // BMW models
            ['maker_id' => 5, 'name' => '3 Series'],
            ['maker_id' => 5, 'name' => '5 Series'],
            ['maker_id' => 5, 'name' => 'X3'],
            ['maker_id' => 5, 'name' => 'X5'],
            ['maker_id' => 5, 'name' => 'i3'],

            // Mercedes-Benz models
            ['maker_id' => 6, 'name' => 'C-Class'],
            ['maker_id' => 6, 'name' => 'E-Class'],
            ['maker_id' => 6, 'name' => 'GLC'],
            ['maker_id' => 6, 'name' => 'GLE'],
            ['maker_id' => 6, 'name' => 'A-Class'],

            // Tesla models
            ['maker_id' => 19, 'name' => 'Model S'],
            ['maker_id' => 19, 'name' => 'Model 3'],
            ['maker_id' => 19, 'name' => 'Model X'],
            ['maker_id' => 19, 'name' => 'Model Y'],
            ['maker_id' => 19, 'name' => 'Cybertruck'],
        ]);
    }
}
