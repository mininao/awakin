<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

use App\User;
use App\Order;
use App\Product;

class DefaultTestData extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // And a bunch of fake google users
        $this->command->info('Generating a few more users');
        factory(User::class , 2)->create();

        // Create some products
        $this->command->info('Generating 10 Products');
        $products = factory(Product::class , 10)->create();

        // Create some orders for each User
        $users = User::all();
        $users->each(function ($u)
        {
            $this->command->info('Generating Orders for one user');
            for ($x = 0; $x <= rand(1, 3); $x++)	{
                $u->orders()->save(factory(Order::class)->make());
            }
        });

        // Populate the orders with ordered products
        $orders = Order::all();
        $this->command->info('Will now populate '.$orders->count().' Orders');
        $orders->each(function ($order) use ($products)
        {
            $this->command->info('Populating order #' . $order->order_id . ' with products');
            for ($x = 0; $x <= rand(1, 4); $x++)	{
                $order->products()->attach($products->random()->id,['quantity'=>rand(1,3)]);
            }
        });
    }
}