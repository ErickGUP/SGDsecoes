<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class control_catalogo extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "control_catalogo";
  	protected $primaryKey = "conc_id";
  	protected $fillable = [];


    
}
