<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function jets()
    {
        return $this->belongsToMany(Jet::class, 'destinations_jets')
            ->withPivot(['from', 'to', 'seats', 'estimated_price']);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function destinationBlocks()
    {
        return $this->hasMany(DestinationBlock::class);
    }


}
