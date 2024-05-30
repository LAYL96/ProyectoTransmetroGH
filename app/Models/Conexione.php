<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conexione
 *
 * @property $id
 * @property $id_estacion_origen
 * @property $id_estacion_destino
 * @property $direccion_ip
 * @property $puerto
 * @property $protocolo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conexione extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estacion_origen', 'id_estacion_destino', 'direccion_ip', 'puerto', 'protocolo'];

    public function estacionOrigen()
    {
        return $this->belongsTo(Estacione::class, 'id_estacion_origen', 'id');
    }

    public function estacionDestino()
    {
        return $this->belongsTo(Estacione::class, 'id_estacion_destino', 'id');
    }
}
