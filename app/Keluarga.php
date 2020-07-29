<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
	protected $table = 'keluarga';
    protected $fillable=['nokk', 'namakpk', 'tl', 'idstating', 'idalamat', 'norumah', 'foto',];
    protected $dates=['tl'];

    public function getNamaKPKAttribute($namakpk){
    	return ucwords($namakpk);
    }

    public function setNamaKPKAttribute($namakpk){
    	$this->attributes["namakpk"] = strtolower($namakpk);
    }

    public function telefon(){
        return $this->hasOne('App\Telefon', 'idtelefon');
    }

    public function stating(){
        return $this->belongsTo('App\Stating', 'idstating');
    }

    public function alamat(){
        return $this->belongsTo('App\Alamat', 'idalamat');
    }

    public function bansos(){
        return $this->belongsToMany('App\Bansos', 'bansoskeluarga', 'idbansoskeluarga', 'idbansos')->withTimeStamps();
    }

    public function getBansosKeluargaAttribute($namakpk){
        return $this->bansos->pluck('idbansos')->toArray();
    }
}