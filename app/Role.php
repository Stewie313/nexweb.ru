<?php

namespace HD;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users() {
      return $this->belongsToMany('HD\User');
    }
}
