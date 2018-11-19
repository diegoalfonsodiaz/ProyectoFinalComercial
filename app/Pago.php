<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    
    protected $table='pago';

    protected $primaryKey='idpago';

    public $timestamps=false;


    protected $fillable =[
    	'idcliente',
        'idcombo',
        'nit'

    ];

    protected $guarded =[

    ];
}
