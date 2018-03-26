<?php

use Faker\Generator as Faker;
use App\Categoria;



$factory->define(Categoria::class, function (Faker $faker) {
    return [
    
        'name' => ucfirst($faker->word),
        'descripcion' => $faker->sentence(10) 
    ];
});
