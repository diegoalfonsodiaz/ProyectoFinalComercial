<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Combo;

class Cliente extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Combo::class);
    }

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
