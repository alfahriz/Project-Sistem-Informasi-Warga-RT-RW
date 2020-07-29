<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    protected $table = 'bansos';
    protected $primaryKey = 'idbansos';
    protected $fillable = ['namabansos'];

    public function keluarga(){
    	return $this->belongsToMany('App\Keluarga', 'bansoskeluarga', 'idbansos', 'idbansoskeluarga');
    }
}