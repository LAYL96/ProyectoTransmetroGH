<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piloto
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $fecha_nacimiento
 * @property $genero
 * @property $id_municipalidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'genero', 'id_municipalidad'];

    // Relación con el modelo Municipalidade
    public function municipalidades()
    {
        return $this->hasOne('App\Models\Municipalidade', 'id', 'id_municipalidad');
    }

    // Relación con el modelo HistorialEducativo
    public function historialEducativo()
    {
        return $this->hasMany('App\Models\HistorialEducativo', 'id_piloto', 'id');
    }
}
