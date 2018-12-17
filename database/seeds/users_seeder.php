<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){

            if ($i == 0){
               DB::table('users')->insert([
                    'nick' => 'nick'.$i,
                    'nombre' => 'admin',
                    'apellido' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('admin'),
                    'perfil_id' => 1
                ]); 
            }else {
	         DB::table('users')->insert([
		            'nick' => 'nick'.$i,
		            'nombre' => 'nombre'.$i,
		            'apellido' => 'apellido'.$i,
		            'email' => 'correo'.$i,
                    'password' => Hash::make(str_random(10))
                ]);
            }
        }
    }
}
