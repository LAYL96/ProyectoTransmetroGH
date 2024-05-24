<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipalidade
 *
 * @property $id
 * @property $departamento
 * @property $municipio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipalidade extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamento', 'municipio'];



}
