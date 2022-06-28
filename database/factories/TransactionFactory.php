<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Objects_user;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        $owner = $this->faker->numberBetween(1, 10); // se debe de tener en cuenta la cantidad de usuarios y los objetos que se quiera crear
        $client = $this->faker->numberBetween(1, 10); // se debe hacer una comparación para estos dos campos
        $state = $this->faker->randomElement([1, 2, 3]);
        $objects_users = $this->faker->numberBetween(1, 10); // se deve verificar que no se repita el mismo objeto, una condicion seria el estado del objeto, si no tiene estado asignarle el estado

        $state_objet = Objects_user::where('state',0)->count();//consulta el objeto, donde verifica si ese objeto le pertenese al dueño, debuelve el estado del objeto

        if ($state_objet == 1) { // estado del objeto disponible
            if ($owner != $client) { // tiene que ser diferentes el dueño y el cliente
                return [
                    /*contains()*/
                    'owner'  => $owner, // se debe de tener en cuenta la cantidad de usuarios y los objetos que se quiera crear
                    'client'  => $client, // se debe hacer una comparación para estos dos campos
                    'state'  => $state,
                    'objects_users'  => $objects_users // se deve verificar que no se repita el mismo objeto, una condicion seria el estado del objeto, si no tiene estado asignarle el estado
                ];
            }
        }
    }
}
