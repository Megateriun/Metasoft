<?php

namespace Database\Seeders;

use App\Models\Users_role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users_role_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Users_role();
        $role->role = "Admin";
        $role->save();

        $role1 = new Users_role();
        $role1->role = "Usuario";
        $role1->save();
/* 
        $role2 = new Users_role();
        $role2->role = "Cliente";
        $role2->save();
*/
    }
}
