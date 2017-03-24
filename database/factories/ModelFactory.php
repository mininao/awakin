<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => 'Cafe '.$faker->word,
        'description' => $faker->text(50),
        'price' => $faker->numberBetween(50, 200),
        'isMenu' => false,
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'status' => $faker->randomElement(["received", "preparing", "awaiting_answer","refused","ready","finished"]),
        'order_id' => $faker->unique()->uuid(),
        'user_id' => 1
    ];
});
