<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "provinces";

    protected $fillable = ['nombre', 'pais_id'];

    public function Country() {
        return $this->belongsTo('App\Country');
    }

    public function Cities() {
        return $this->hasMany('App\City');
    }
}
