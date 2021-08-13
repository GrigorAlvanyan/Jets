<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuLinks()
    {
        return $this->hasMany(MenuLinks::class);
    }
}
