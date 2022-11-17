<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diagnosis
 *
 * @property $id
 * @property $user_id
 * @property $nama_pasien
 * @property $jenis_kelamin
 * @property $alamat
 * @property $tanggal
 * @property $hasil
 * @property $saran
 * @property $created_at
 * @property $updated_at
 *
 * @property Answer[] $answers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diagnosis extends Model
{

  static $rules = [
    'user_id' => 'required',
    'nama_pasien' => 'required',
    'jenis_kelamin' => 'required',
    'alamat' => 'required',
    'tanggal' => 'required',
    'tanggal' => 'hipotesa_awal',
    'hasil' => 'required',
    'saran' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'nama_pasien', 'jenis_kelamin', 'alamat', 'tanggal', 'hipotesa_awal', 'hasil', 'saran'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function answers()
  {
    return $this->hasMany('App\Models\Answer', 'id_diagnosis', 'id');
  }

  public function user()
  {
    return  $this->belongsTo('App\User');
  }
}
