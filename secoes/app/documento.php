<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "documento";
  	protected $primaryKey = "doc_id";
  	protected $fillable = [];

  	public function documento_control_remitente(){
  		return $this->hasOne('App\control_remitente', 'crem_id', 'doc_crem_id');
  	}

    public function documento_control_catalogo(){
      return $this->hasOne('App\control_catalogo', 'conc_id', 'doc_conc_id');
    }

}
