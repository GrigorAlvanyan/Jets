<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function historable()
    {
        return $this->morphTo();
    }
}
