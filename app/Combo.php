<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $table='combo';

    protected $primaryKey='idcombo';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'precio'

    ];

    protected $guarded =[

    ];
}
