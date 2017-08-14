<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function work(){

        return $this->belongsTo(Work::class);

    }
}
