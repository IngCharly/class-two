<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class TestLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:update-product {--id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update product';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $productId = $this->argument('id');

        $option = $this->ask('Are you sure?[Y/n]');

        if ($option === 'Y') {
            $this->info("Start to update product...");
            $product = Product::find($productId);
            $this->info("Product Name: {$product->product_name}!");
        } else {
            $this->info("Product not updated!");
        }


        $this->info("Process finished :)");
    }
}
