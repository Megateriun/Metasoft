<?php

namespace Database\Seeders;

use App\Models\Object_user;
use App\Models\Objects_user;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

/**/

       $this -> call(Users_role_Seeder::class); // esto es para usar la clase Users_role_Seeder que incluye los roles
       $this -> call(Action_Seeder::class);
       $this -> call(Objects_state_Seeder::class);
       $this -> call(Transactions_state_Seeder::class);

        $user = new User();
        $user->role = 1;
        $user->document = 123456789;
        $user->name = "Stiven Cruz";
        $user->image = null;
        $user->email = "stiven@gmail.com";
        $user->password = bcrypt("123456");

        $user->save();

        User::factory(100)->create(); // aqui se escribe la cantidad de datos random de usuario
        Objects_user::factory(100)->create(); // aqui se escribe la cantidad de objetos random
        //Transaction::factory(10)->create();
    }
}
