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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $firstName = $faker->firstName($gender = 'male');
    $lastName1 = $faker->lastName;
    //$lastName2 = $faker->lastName;
    $usu_name = $firstName.'.'.$lastName1;
    $email = $usu_name.'@'.$faker->freeEmailDomain;

    return [
        'id' => '6'.$faker->ean8,
        'name' => $usu_name,
        'email' => $email,
        'password' => $password ?: $password = bcrypt('secret'),
        'type' => 'user',
        'remember_token' => str_random(10),
    ];
});

//El objeto FAKER permite generar datos de forma aleatorias
$factory->define(App\Persona::class, function (Faker\Generator $faker) {
    //Retornamos un array con los datos
    $gender = ['M','F'];
    return [
        'per_nombre1' => $faker->firstName,
        'per_nombre2' => $faker->firstName,
        'per_ape_pater' => $faker->lastName,
        'per_ape_mater' => $faker->lastName,
        'per_fecnac' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'per_genero' => $gender->$gender->random(),
        'per_estCivil' => $faker->,
        'per_provincia' => $faker->,
        'per_direccion' => $faker->,
        'per_activo' => $faker->,
    ];
});


