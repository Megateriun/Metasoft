<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Action_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $action = new Action();
        $action->action = "Vender";
        $action->save();

        $action1 = new Action();
        $action1->action = "Alquilar";
        $action1->save();

        $action2 = new Action();
        $action2->action = "Prestar";
        $action2->save();
    }
}
