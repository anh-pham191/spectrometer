<?php

namespace App\Console\Commands;

use App\ScannedItem;
use App\Spectrometer;
use App\TempLamb;
use Illuminate\Console\Command;

class MakeScannedItem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:scanned_item';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $spectrometer = Spectrometer::create([
            'name' => 'NIRScan'
        ]);
        ScannedItem::truncate();
        TempLamb::truncate();

        $lambScanned = ScannedItem::create([
            'name' => 'Temp Lamb',
            'spectrometer_id' => $spectrometer->id,
            'image' => 'static/temp_lamb/scan_locations.jpg'
        ]);

        TempLamb::create([
            'name' => 'lamb_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1lhmlFP3STEIyvAtx3flExoIQJgFFtPvB&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012004_20170921_154654.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_2',
            'excel_file' => 'https://drive.google.com/uc?id=1iGjspgtNtgm85ombsOOzNxIfiEUtGOM2&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012005_20170921_154712.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_3',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1gVytCh6ONipgT180glQwju1eeCbEvUpg&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012006_20170921_154735.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_4',
            'excel_file' => 'https://drive.google.com/uc?id=17rIB-X7O4co_Wsvf_umzte1afd5sSigr&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012007_20170921_154756.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_5',
            'excel_file' => 'https://drive.google.com/uc?id=1azYvjIFMQG90p4K2u4tkU6VSkzybyOlK&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012008_20170921_154818.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_6',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1wg501zGDF_vAc64DOfb_Deq765qykirm&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012009_20170921_154832.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_7',
            'excel_file' => 'https://drive.google.com/uc?id=1BNgPblIFnZvgHItWplkUVdAJwzXXUW8O&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012010_20170921_154851.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_8',
            'excel_file' => 'https://drive.google.com/uc?id=1scIy-QEyxZBL5u64wmmCsRf36q0HVJ7c&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012011_20170921_160317.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_9',
            'excel_file' => 'https://drive.google.com/uc?id=19aHP2GVKSpkbPVJO7xED0OVbWgnV-uYR&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012012_20170921_160403.csv',
            'scanned_item_id' => $lambScanned->id
        ]);
        TempLamb::create([
            'name' => 'lamb_10',
            'excel_file' => 'https://drive.google.com/uc?id=18UH-85DSWQjMvY8Bh1isDwuMDG6ebgon&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012013_20170921_160641.csv',
            'scanned_item_id' => $lambScanned->id
        ]);

        $milkBiscuitScanned = ScannedItem::create([
            'name' => 'Temp Milk Biscuit',
            'spectrometer_id' => $spectrometer->id,
        ]);

        TempLamb::create([
            'name' => 'milk_biscuit_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1kViKXKeCHVONTbBpckvHs8JHj2f72f_w&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample1.xlsx',
            'scanned_item_id' => $milkBiscuitScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_biscuit_2',
            'excel_file' => 'https://drive.google.com/uc?id=1J5SUmTJ65dJWzS68cHE4CbolPxhbubYq&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample2.xlsx',
            'scanned_item_id' => $milkBiscuitScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_biscuit_3',
            'excel_file' => 'https://drive.google.com/uc?id=1SPepoTlE1Bz2Levh8CdGEx6Ta_h8nfV9&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample3.xlsx',
            'scanned_item_id' => $milkBiscuitScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_biscuit_4',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1HyWTEg7nlq3HQ-W0i64HY0LvPb1ABs6l&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample4.xlsx',
            'scanned_item_id' => $milkBiscuitScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_biscuit_5',
            'excel_file' => 'https://drive.google.com/uc?id=1gsLshE8jWjf17PIzagPp_y5HRHcvTlMf&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample5.xlsx',
            'scanned_item_id' => $milkBiscuitScanned->id
        ]);

        $milkPowderScanned = ScannedItem::create([
            'name' => 'Temp Milk Powder',
            'spectrometer_id' => $spectrometer->id
        ]);

        TempLamb::create([
            'name' => 'milk_powder_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=14Yk441dMAbZsAB3Oup7qRSae4dzhGfhh&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample1.xlsx',
            'scanned_item_id' => $milkPowderScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_powder_2',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1q2DURYYogNAf6BdFCopYwNSqOinBaIKv&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample2.xlsx',
            'scanned_item_id' => $milkPowderScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_powder_3',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1TK3DmzwOeCE1L6dCddUzRLsscMNjCmyi&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample3.xlsx',
            'scanned_item_id' => $milkPowderScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_powder_4',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1QxE2FjyxEt5GkGt5zE8DB7_LnKfRxsLS&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample4.xlsx',
            'scanned_item_id' => $milkPowderScanned->id
        ]);

        TempLamb::create([
            'name' => 'milk_powder_5',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1dYxydDB9RpUC1ELGQ037Sg_6xc4GvH6L&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample5.xlsx',
            'scanned_item_id' => $milkPowderScanned->id
        ]);
    }
}
