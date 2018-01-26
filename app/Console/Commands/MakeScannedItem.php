<?php

namespace App\Console\Commands;

use App\ScannedItem;
use App\Spectrometer;
use App\TempLamb;
use App\Type;
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
        Type::create([
            'name' => "SUPER"
        ]);
        Type::create([
            'name' => "MEAT"
        ]);
        Type::create([
            'name' => "FRUIT"
        ]);
        Type::create([
            'name' => "MILK"
        ]);
        Type::create([
            'name' => "HONEY"
        ]);
    }
}
