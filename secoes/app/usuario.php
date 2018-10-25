<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "usuario";
  	protected $primaryKey = "usu_id";
  	protected $fillable = [];
}
