<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';
	protected $primaryKey = 'idalmt';
    protected $fillable = ['idalmt','alamatjalan'];

    public function keluarga(){
    	return $this->hasMany('App\Keluarga', 'idalamat');
    }
}