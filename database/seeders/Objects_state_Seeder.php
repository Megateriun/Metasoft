<?php

namespace Database\Seeders;

use App\Models\Objects_state;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Objects_state_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $state = new Objects_state();
        $state->object_state = "Disponible";
        $state->save();

        $state1 = new Objects_state();
        $state1->object_state = "No disponible";
        $state1->save();

        $state2 = new Objects_state();
        $state2->object_state = "En proceso";
        $state2->save();

        $state3 = new Objects_state();
        $state3->object_state = "Vendido";
        $state3->save();
    }
}
