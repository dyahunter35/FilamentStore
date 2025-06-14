<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\User;
use App\Notifications\LowStockNotification;

class CheckLowStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-low-stock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for low stock products and notify users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $lowStockProducts = Product::whereColumn('quantity', '<=', 'reorder_point')->get();
        if ($lowStockProducts->isEmpty()) {
            $this->info('No low stock products found.');
            return;
        }
        $users = User::all();
        foreach ($lowStockProducts as $product) {
            foreach ($users as $user) {
                $user->notify(new LowStockNotification($product));
            }
            $this->info("Notified users about low stock: {$product->name}");
        }
    }
}
