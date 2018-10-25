<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "control_nombre_version";
  	protected $primaryKey = "cnv_id";
  	protected $fillable = [];

  	

}
