<?php

namespace HD;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function user() {
      	return $this->belongsTo('HD\User');
	}
}
