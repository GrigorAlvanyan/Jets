<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function jets()
    {
        return $this->belongsToMany(Jet::class, 'destination_jets');
    }
}
