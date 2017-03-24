<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Order;
use App\Product;

class DefaultTestData extends Seeder
{

  /**
   * The Faker instance for the Seeder.
   *
   * @var \Faker\Generator
   */
  protected $faker;

  /**
   * Create a new seeder instance.
   *
   * @param  \Faker\Generator  $faker
   * @return void
   */
  public function __construct(Faker $faker)
  {
      $this->faker = $faker;
  }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create one main test user
      $faker = Faker\Factory::create();

      User::create([
          'name' => "Max",
          'email' => "max@max.max",
          'password' => bcrypt("maxmax"),
      ]);

      // And a bunch of others

      factory(User::class, 10)->create();

      // Create some products

      $products = factory(Product::class, 10)->create();

      // Create some orders for each User

      $users = User::all();

      $users->each(function ($u) {
        for ($x = 0; $x <= $faker->numberBetween(5,10); $x++) {
          $u->orders()->save(factory(App\Order::class)->make());
        }
      });

      // Populate the orders with ordered products

      $orders = User::all();

      $orders->each(function ($order) {
        $order->products()->saveMany($faker->randomElements($products,$faker->numberBetween(1,4)));
      });

    }
}
