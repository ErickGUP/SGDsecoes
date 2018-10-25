<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class control_destinatario extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "control_destinatario";
  	protected $primaryKey = "cdes_id";
  	protected $fillable = [];

  	public function control_destinatario-control_nombre_version_inst(){
  		return $this->hasOne('App\control_nombre_version', 'cnv_id', 'cdes_inst_cnv_id');
  	}

  	public function control_destinatario-control_nombre_version_car(){
  		return $this->hasOne('App\control_nombre_version', 'cnv_id', 'cdes_car_cnv_id');
  	}

  	public function control_destinatario-control_nombre_version_uni(){
  		return $this->hasOne('App\control_nombre_version', 'cnv_id', 'cdes_uni_id');
  	}
}
