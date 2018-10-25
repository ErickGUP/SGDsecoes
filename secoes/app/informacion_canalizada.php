<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informacion_canalizada extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "informacion_canalizada";
  	protected $primaryKey = "ican_id";
  	protected $fillable = [];

  	public function informacion_canalizada-documento(){
  		return $this->hasOne('App\documento', 'doc_id', 'ori_doc_id');
  	}

  	public function informacion_canalizada-control_catalogo_atencion(){
  		return $this->hasOne('App\control_catalogo', 'conc_id', 'ican_aten_conc_id');
  	}

  	public function informacion_canalizada-control_catalogo_clasificacion(){
  		return $this->hasOne('App\documento', 'ori_doc_id', 'ican_clas_conc_id');
  	}

  	public function informacion_canalizada-control_catalogo_estado(){
  		return $this->hasOne('App\documento', 'ori_doc_id', 'ican_uedoc_id');
  	}

  	public function informacion_canalizada-control_nombre_version_unidad(){
  		return $this->hasOne('App\control_nombre_version', 'cnv_id', 'ican_uni_cnv_id');
  	}

  	public function informacion_canalizada-control_destinatario(){
  		return $this->hasMany('App\control_destinatario', 'cdes_id', 'ican_cdes_id');
  	}

  	public function informacion_canalizada-control_remitente(){
  		return $this->hasOne('App\control_remitente', 'crem_id', 'ican_crem_id');
  	}

  	public function informacion_canalizada-usuario(){
  		return $this->hasOne('App\usuario', 'usu_id', 'ican_usu_id');
  	}

}
