<?php

namespace App\Console\Commands;

use App\Models\Product as ModelsProduct;
use App\Product;
use Illuminate\Console\Command;

class MakeTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'testing my command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product = new Product;
        $product = ModelsProduct::query()
            ->where('id', 17)->first()->meta()->where('key', PRICE_KEY)
            ->update([ "value" => 468215]);
        return Command::SUCCESS;
    }
}
