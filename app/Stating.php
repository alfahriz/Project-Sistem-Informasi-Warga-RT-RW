<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stating extends Model
{
    protected $table = 'stating';
	protected $primaryKey = 'idstg';
    protected $fillable = ['idstg','statustinggal'];

    public function keluarga(){
    	return $this->hasMany('App\Keluarga', 'idstating');
    }
}
