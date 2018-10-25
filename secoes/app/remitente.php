<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remitente extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "remitente";
  	protected $primaryKey = "rem_id";
  	protected $fillable = [];

  	public function remitente-control_catalogo(){
  		return $this->hasMany('App\control_remitente', 'crem_id', 'rem_crem_id');
}
