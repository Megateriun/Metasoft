<?php

namespace Database\Seeders;

use App\Models\Transactions_state;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Transactions_state_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = new Transactions_state();
        $state->transaction_state = "Realizada";
        $state->save();

        $state1 = new Transactions_state();
        $state1->transaction_state = "En proceso";
        $state1->save();

        $state2 = new Transactions_state();
        $state2->transaction_state = "Cancelada";
        $state2->save();

    }
}
