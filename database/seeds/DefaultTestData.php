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

        // Create a test user, if it doesn't already exists.
        if(!User::first()) {
            $this->command->info('Zero users found, generating test user');
            User::create([
                'name' => "Max",
                'email' => "max@max.max",
                'password' => bcrypt("maxmax")
            ]);    
        }
        
        // And a bunch of others
        $this->command->info('Generating ten more users');
        factory(User::class , 10)->create();

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
                $order->products()->save($products->random());
            }
        });
    }
}