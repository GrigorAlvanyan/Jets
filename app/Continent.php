<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $guarded =[];

    public function countries()
    {
        return $this->hasMany(Country::class, 'continent_id', 'id');
    }
}
