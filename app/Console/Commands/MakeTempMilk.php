<?php

namespace App\Console\Commands;

use App\TempMilkBiscuit;
use App\TempMilkPowder;
use Illuminate\Console\Command;

class MakeTempMilk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:temp_milk';

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
        TempMilkBiscuit::create([
            'name' => 'milk_biscuit_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1kViKXKeCHVONTbBpckvHs8JHj2f72f_w&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample1.xlsx'
        ]);

        TempMilkBiscuit::create([
            'name' => 'milk_biscuit_2',
            'excel_file' => 'https://drive.google.com/uc?id=1J5SUmTJ65dJWzS68cHE4CbolPxhbubYq&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample2.xlsx'
        ]);

        TempMilkBiscuit::create([
            'name' => 'milk_biscuit_3',
            'excel_file' => 'https://drive.google.com/uc?id=1SPepoTlE1Bz2Levh8CdGEx6Ta_h8nfV9&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample3.xlsx'
        ]);

        TempMilkBiscuit::create([
            'name' => 'milk_biscuit_4',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1HyWTEg7nlq3HQ-W0i64HY0LvPb1ABs6l&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample4.xlsx'
        ]);
        
        TempMilkBiscuit::create([
            'name' => 'milk_biscuit_5',
            'excel_file' => 'https://drive.google.com/uc?id=1gsLshE8jWjf17PIzagPp_y5HRHcvTlMf&export=download',
            'view_online' => 'static/temp_milk_biscuits/milk_biscuit_absorbance_sample5.xlsx'
        ]);

        TempMilkPowder::create([
            'name' => 'milk_powder_1',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=14Yk441dMAbZsAB3Oup7qRSae4dzhGfhh&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample1.xlsx'
        ]);

        TempMilkPowder::create([
            'name' => 'milk_powder_2',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1q2DURYYogNAf6BdFCopYwNSqOinBaIKv&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample2.xlsx'
        ]);

        TempMilkPowder::create([
            'name' => 'milk_powder_3',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1TK3DmzwOeCE1L6dCddUzRLsscMNjCmyi&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample3.xlsx'
        ]);

        TempMilkPowder::create([
            'name' => 'milk_powder_4',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1QxE2FjyxEt5GkGt5zE8DB7_LnKfRxsLS&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample4.xlsx'
        ]);

        TempMilkPowder::create([
            'name' => 'milk_powder_5',
            'excel_file' => 'https://drive.google.com/uc?authuser=0&id=1dYxydDB9RpUC1ELGQ037Sg_6xc4GvH6L&export=download',
            'view_online' => 'static/temp_milk_powder/milk_powder_absorbance_sample5.xlsx'
        ]);
    }
}
