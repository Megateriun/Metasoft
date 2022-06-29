<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Objects_user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document',
        'name',
        'email',
        'password',
    ];

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

}
