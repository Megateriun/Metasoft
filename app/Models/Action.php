<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    public function innerjoin_action()
    {
        //return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->hasOne('App\Models\Action','id','action');
    }
}
