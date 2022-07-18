<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    public function atheletes() {
        return $this->hasMany('App\Athlete');
    }
}
