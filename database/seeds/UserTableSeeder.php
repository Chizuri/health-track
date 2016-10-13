<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //funcion(Clase) -> cantidad de datos -> insertar
        //$user = factory(User::class)->times(10)->create();
        $user = factory(User::class)->times(10)->make();


        //\DB::table('users')->insert()
    }
}
