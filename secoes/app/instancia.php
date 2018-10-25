<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instancia extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "instancia";
  	protected $primaryKey = "inst_id";
  	protected $fillable = [];

  	public function instancia_unidad(){
  		return $this->hasMany('App\unidad', 'inst_uni_id', 'uni_id');
  	}

  	public function instancia_remitente(){
  		return $this->hasMany('App\remitente', 'inst_inst_id', 'rem_id');
  	}
}
