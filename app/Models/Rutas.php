<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS INVERSA

    public function user (){
        return $this->belongsTo('App\Models\User');
    }
}
