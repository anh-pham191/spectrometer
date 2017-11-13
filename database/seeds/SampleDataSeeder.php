<?php

use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spectrometer = \App\Spectrometer::create([
            'name' => 'SCio'
        ]);
        $kiwiFruit = \App\Kiwifruit::create([
            'name' => 'oscarGreen',
            'spectrometer_id' => $spectrometer->id
        ]);
        $kiwifruitScanSkin1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 1,
            'calories' => 50,
            'carbs' => 11,
            'water' => 87
        ]);
        $kiwifruitScanSkin2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 2,
            'calories' => 50,
            'carbs' => 11,
            'water' => 87
        ]);
        $kiwifruitScanSkin3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 3,
            'calories' => 55,
            'carbs' => 11,
            'water' => 86
        ]);

        $kiwifruitScanSideCut1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 1,
            'calories' => 50,
            'carbs' => 10,
            'water' => 87
        ]);
        $kiwifruitScanSideCut2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 2,
            'calories' => 60,
            'carbs' => 13,
            'water' => 85
        ]);
        $kiwifruitScanSideCut3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 3,
            'calories' => 55,
            'carbs' => 12,
            'water' => 85
        ]);

        $kiwifruitScanMidCut1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 1,
            'calories' => 70,
            'carbs' => 15,
            'water' => 83
        ]);
        $kiwifruitScanMidCut2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 2,
            'calories' => 60,
            'carbs' => 13,
            'water' => 84
        ]);
        $kiwifruitScanMidCut3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 3,
            'calories' => 75,
            'carbs' => 16,
            'water' => 82
        ]);
    }
}
