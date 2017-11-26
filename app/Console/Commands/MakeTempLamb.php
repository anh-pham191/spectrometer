<?php

namespace App\Console\Commands;

use App\TempLamb;
use Illuminate\Console\Command;

class MakeTempLamb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:temp_lamb';

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
        TempLamb::create([
            'name' => 'lamb_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1lhmlFP3STEIyvAtx3flExoIQJgFFtPvB&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012004_20170921_154654.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_2',
            'excel_file' => 'https://drive.google.com/uc?id=1iGjspgtNtgm85ombsOOzNxIfiEUtGOM2&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012005_20170921_154712.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_3',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1gVytCh6ONipgT180glQwju1eeCbEvUpg&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012006_20170921_154735.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_4',
            'excel_file' => 'https://drive.google.com/uc?id=17rIB-X7O4co_Wsvf_umzte1afd5sSigr&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012007_20170921_154756.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_5',
            'excel_file' => 'https://drive.google.com/uc?id=1azYvjIFMQG90p4K2u4tkU6VSkzybyOlK&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012008_20170921_154818.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_6',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1wg501zGDF_vAc64DOfb_Deq765qykirm&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012009_20170921_154832.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_7',
            'excel_file' => 'https://drive.google.com/uc?id=1BNgPblIFnZvgHItWplkUVdAJwzXXUW8O&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012010_20170921_154851.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_8',
            'excel_file' => 'https://drive.google.com/uc?id=1scIy-QEyxZBL5u64wmmCsRf36q0HVJ7c&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012011_20170921_160317.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_9',
            'excel_file' => 'https://drive.google.com/uc?id=19aHP2GVKSpkbPVJO7xED0OVbWgnV-uYR&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012012_20170921_160403.csv'
        ]);
        TempLamb::create([
            'name' => 'lamb_10',
            'excel_file' => 'https://drive.google.com/uc?id=18UH-85DSWQjMvY8Bh1isDwuMDG6ebgon&export=download',
            'view_online' => 'static/temp_lamb/Hadamard 1_012013_20170921_160641.csv'
        ]);
    }
}
