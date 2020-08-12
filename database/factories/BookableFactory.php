<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$suffix = [
    "Villa",
    "House",
    "Cottage",
    "Luxury Villas",
    "Cheap House",
    "Cheap Room",
    "Luxury Room",
    "Fancy Room"
];

$factory->define(Bookable::class, function (Faker $faker) use ($suffix) {
    return [
        'title' => $faker->city . " " . Arr::random($suffix),
        'description' => $faker->text()
    ];
});
