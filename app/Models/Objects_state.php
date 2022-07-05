<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects_state extends Model
{
    use HasFactory;

    public function innerjoin_state()
    {
        return $this->hasOne('App\Models\Objects_state','id','state'); //id de la tabla-id que le estan pasando al metodo
    }

   
}
