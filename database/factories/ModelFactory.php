<?php

use Carbon\Carbon;
use Faker\Generator;

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
    	'country_id' => rand(1, 5),
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Generator $faker){
	return [
		'user_id' => rand(1,5),
		'title' => $faker->sentence,
		'body' => $faker->paragraph,
		'published_at' => Carbon::now(),
	];
});

$factory->define(App\Comment::class, function(Generator $faker){
	return [
		'post_id' => rand(1, 100),
		'comment' => $faker->paragraph
	];
});

$factory->define(App\Address::class, function(Generator $faker){
	return [
		'user_id' => $faker->unique()->randomDigit,
		'phone' => $faker->phoneNumber,
		'address' => $faker->address
	];
});

$factory->define(App\Country::class, function(Generator $faker){
	return [
		'name' => $faker->country
	];
});

$factory->define(App\Staff::class, function(Generator $faker){
	return [
		'name' => $faker->name
	];
});

$factory->define(App\Product::class, function(Generator $faker){
	return [
		'name' => $faker->word,
		'price' => rand(10, 1000)
	];
});
