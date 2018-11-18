<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='cliente';

    protected $primaryKey='idcliente';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'telefono',
    	'email'

    ];

    protected $guarded =[

    ];
}
