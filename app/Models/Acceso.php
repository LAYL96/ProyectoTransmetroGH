<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acceso
 *
 * @property $id
 * @property $id_linea
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Acceso extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_linea', 'nombre'];

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea', 'id_linea', 'id');
    }
}
