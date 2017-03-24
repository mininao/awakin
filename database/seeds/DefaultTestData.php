<?php

use Illuminate\Database\Seeder;
use App\User;

class DefaultTestData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create one main test user

      $testUser = User::create([
          'name' => "Max",
          'email' => "max@max.max",
          'password' => bcrypt("maxmax"),
      ]);

      // And a bunch of others

      $dumbUsers = factory(App\User::class, 10)->create();

      // Create some products

      $products = factory(App\Product::class, 10)->create();

      // Create some orders
      for ($x = 0; $x <= 10; $x++) {
        $testUser->orders()->save(factory(App\Order::class)->make());
      }

      $dumbUsers->each(function ($u) {
        for ($x = 0; $x <= 5; $x++) {
          $u->orders()->save(factory(App\Order::class)->make());
        }
      });

    }
}
