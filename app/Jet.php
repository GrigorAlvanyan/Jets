<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jet extends Model
{
    public function cabin()
    {
        return $this->hasOne(JetCabin::class, 'jet_id');
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'destinations_jets')
            ->withPivot(['from', 'to', 'seats', 'estimated_price']);
    }
}
