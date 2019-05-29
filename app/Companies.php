<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
	public function employees()
	{
		return $this->hasMany(Employees::class);
	}
}
