<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //En este archivo se tienen guardados los seeders y por medio de las funciones que se encuentra abajo se hacen los seedings
        $this->call(TypeUserSeeder::class);
        
    }
}
