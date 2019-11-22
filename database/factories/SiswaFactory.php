<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Siswa::class, function (Faker $faker) {
    return [
    	'user_id' => 100,
        'nama_lengkap' => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['L','P']),
        'agama' => $faker->randomElement(['Islam','Kristen','Katolik','Hindu','Budha']),
        'alamat' => $faker->address,
    ];
});
