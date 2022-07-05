<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute // encapsulación
    {
        return new Attribute(
            /* 
        get: function($value){
            return ucwords($value); // transforma las primeras letras en mayuscula
        },
        set: function($value){ // captura el dato 
            return strtolower($value);// cambia a minusculas
        }
        */
            // una manera de hacer la encapsulacion más fasil seria asi: (funciones flechasS)
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

/*
// gracias a lo de arribe se ahorra esto

    public function getNameAttribute($value){
        return ucwords($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
*/

    public function innerjoin_user()
    {
        return $this->hasOne('App\Models\User','id','owner'); // estos son las llaves foraneas 
    }

    public function innerjoin_object__state()
    {
        return $this->hasOne('App\Models\Objects_state','id','state'); //id de la tabla-id que le estan pasando al metodo
    }

    public function innerjoin_role()
    {
        return $this->hasOne('App\Models\Users_role','id','role'); //id de la tabla-id que le estan pasando al metodo
    }

    public function innerjoin_action()
    {
        //return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->hasOne('App\Models\Action','id','action');
    }

}
