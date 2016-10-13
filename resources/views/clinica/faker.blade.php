@extends('layouts.pages')

@section('content')

    <div class="row">
        <div>
        <?php
            $faker = Faker\Factory::create('es_ES'); // create a French faker
            for ($i=0; $i < 10; $i++) {
                $firstName = explode(" ", $faker->firstName($gender = 'male'));
                $lastName1 = $faker->lastName;
                $lastName2 = $faker->lastName;

                $usu_name = $firstName[0].'.'.str_replace(' ', '_', $lastName1);
                echo $usu_name . ' - ';
                echo $usu_name.'@'.$faker->freeEmailDomain . '<br>';

            }
        ?>

        </div>
    </div>

@endsection