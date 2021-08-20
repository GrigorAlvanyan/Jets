<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationBlock extends Model
{
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
