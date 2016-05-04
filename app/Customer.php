<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public function contact() {
		return $this->hasOne('App\Contact');
	}
}
