<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Athlete extends Model
{

    protected $fillable
    = [
        'name',
        'genre',
        'nationality_id'
    ];


    public function nationality() {
        return $this->belongsTo('App\Nationality');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}
