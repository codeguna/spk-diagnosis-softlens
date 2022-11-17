<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disease
 *
 * @property $id
 * @property $name
 * @property $diseases_code
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Disease extends Model
{
    
    static $rules = [
		'name' => 'required',
		'diseases_code' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','diseases_code'];



}
