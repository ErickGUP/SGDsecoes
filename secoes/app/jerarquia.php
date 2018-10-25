<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jerarquia extends Model
{
    const created_at;
  	const updated_at;

  	protected $table = "jerarquia";
  	protected $primaryKey = "jer_id";
  	protected $fillable = [];
}
