<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Collection;
class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones',
        'salida'

    ];

    protected $casts=[
        'salida'=>'datetime'
    ];

    static public function getVehiculos(): Collection
    {
        return self::all();
    }

    static public function getVehiculosById($id){
        return self::find($id);
    }

}
