<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 *
 * @property $id
 * @property $id_diagnosis
 * @property $g001
 * @property $g002
 * @property $g003
 * @property $g004
 * @property $g005
 * @property $g006
 * @property $g007
 * @property $g008
 * @property $g009
 * @property $g010
 * @property $g011
 * @property $g012
 * @property $g013
 * @property $g014
 * @property $g015
 * @property $g016
 * @property $g017
 * @property $g018
 * @property $g019
 * @property $g020
 * @property $g021
 * @property $created_at
 * @property $updated_at
 *
 * @property Diagnosis $diagnosis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Answer extends Model
{
    
    static $rules = [
		'id_diagnosis' => 'required',
		'g001' => 'required',
		'g002' => 'required',
		'g003' => 'required',
		'g004' => 'required',
		'g005' => 'required',
		'g006' => 'required',
		'g007' => 'required',
		'g008' => 'required',
		'g009' => 'required',
		'g010' => 'required',
		'g011' => 'required',
		'g012' => 'required',
		'g013' => 'required',
		'g014' => 'required',
		'g015' => 'required',
		'g016' => 'required',
		'g017' => 'required',
		'g018' => 'required',
		'g019' => 'required',
		'g020' => 'required',
		'g021' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_diagnosis','g001','g002','g003','g004','g005','g006','g007','g008','g009','g010','g011','g012','g013','g014','g015','g016','g017','g018','g019','g020','g021'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function diagnosis()
    {
        return $this->hasOne('App\Models\Diagnosis', 'id', 'id_diagnosis');
    }
    

}
