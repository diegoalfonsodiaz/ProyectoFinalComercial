<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
class Combo extends Model
{   
    public function products()
    {
        return $this->belongsToMany(Cliente::class);
    }
    
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
