<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    protected $table = 'telefon';
    protected $primarykey = 'idtelefon';
    protected $fillable = ['idtelefon', 'notelefon'];

    public function art(){
    	return $this->belongsTo('App\Keluarga', 'idtelefon');
    }
}
