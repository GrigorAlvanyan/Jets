<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JetCabin extends Model
{
    protected $guarded = [];

    public function jet()
    {
        return $this->belongsTo(Jet::class,'id');
    }
}
