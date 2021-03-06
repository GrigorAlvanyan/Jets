<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLinks extends Model
{
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function childrens()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
