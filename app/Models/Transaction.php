<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function innerjoin_user()
    {
        return $this->hasOne('App\Models\User','id','owner'); // estos son las llaves foraneas 
    }

    public function innerjoin_state()
    {
        return $this->hasOne('App\Models\Objects_state','id','state'); //id de la tabla-id que le estan pasando al metodo
    }
    
    public function innerjoin_action()
    {
        //return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->hasOne('App\Models\Action','id','action');
    }

    public function innerjoin_state_transaction()
    {
        return $this->hasOne('App\Models\Transactions_state','id','state'); //id de la tabla-id que le estan pasando al metodo
    }


}
