<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_remitente extends Model
{
    
   	const created_at;
  	const updated_at;

  	protected $table = "control_remitente";
  	protected $primaryKey = "crem_id";
  	protected $fillable = [];

  	public function control_remitente-documento(){
  		return $this->hasMany('App\documento', 'doc_id', 'crem_doc_id' );
  	}

    public function control_remitente-control_nombre_version_instancia(){
      return $this->hasOne('App\control_nombre_version', 'cnv_id', 'crem_inst_cnv_id' );
    }

    public function control_remitente-control_nombre_version_unidad(){
      return $this->hasOne('App\control_nombre_version', 'cnv_id', 'crem_uni_cnv_id' );
    }

  	
}
