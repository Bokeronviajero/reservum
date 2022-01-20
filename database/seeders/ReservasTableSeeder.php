<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App/Reserva;

class ReservasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            Reserva::create([
                   'nombre' => str_random(10),
                   'numeroReserva' => str_random(10),
                   'agencia' => str_random(25),
                   'alojamiento' =>str_random(10)
               ]);
            }
    }
}
