<?php

# database/seeds/EquipmentTableSeeder.php

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    public function run()
    {
        Equipment::create([
            'title' => '2012 American Augers DD-10 Directional Drill',
            'description' => '100,000 pound drill rig has operators cabin with heat and A/C and wireline drive chuck, includes 8 empty rod boxes.',
            'status' => 'available'
        ]);

        Equipment::create([
            'title' => '2009 Vermeer D100x120 Series II Directional Drill',
            'description' => 'Unit is equipped with a 200 GPM Kerr pump, FSII drive chuck, does not include any drill rod but has 5 empty baskets.',
            'status' => 'sold'
        ]);

        Equipment::create([
            'title' => '2008 Vermeer D100x120 Series II Directional Drill',
            'description' => 'Used D100x120 Series II has been inspected by a certified service technician and is in good condition.',
            'status' => 'sold'
        ]);

        //... add more starter equipment
    }
}
