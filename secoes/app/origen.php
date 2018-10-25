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

  	/*public function origen_documento(){
  		return $this->hasMany('App\documento', 'ori_doc_id', 'ori_doc_id');
  	}
*/
  	
}
