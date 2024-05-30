<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DistanciasEntreEstacione
 *
 * @property $id
 * @property $id_estacion_origen
 * @property $id_estacion_destino
 * @property $distancia_km
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DistanciasEntreEstacione extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estacion_origen', 'id_estacion_destino', 'distancia_km'];

    public function estacionOrigen()
    {
        return $this->belongsTo('App\Models\Estacione', 'id_estacion_origen', 'id');
    }

    public function estacionDestino()
    {
        return $this->belongsTo('App\Models\Estacione', 'id_estacion_destino', 'id');
    }
}
