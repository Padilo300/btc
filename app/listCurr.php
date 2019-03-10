<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listCurr extends Model
{
	protected $table 		= "list_currens";
	protected $primaryKey 	= "id";
	protected $guarded		= [];
}
