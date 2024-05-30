<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LongitudesLinea
 *
 * @property $id
 * @property $id_linea
 * @property $longitud_km
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LongitudesLinea extends Model
{
    protected $table = 'longitudes_lineas';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_linea', 'longitud_km'];

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea', 'id_linea', 'id');
    }
}
