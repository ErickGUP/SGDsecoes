<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class origen extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "origen";
  	protected $primaryKey = "ori_id";
  	protected $fillable = [];

  	public function origen_control_catalogo(){
  		return $this->hasMany('App\origen_control_catalogo', 'conc_id', 'ori_conc_id');
  	}

  	
}
