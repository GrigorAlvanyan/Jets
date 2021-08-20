<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    public function page()
    {
        return $this->belongsTo(Destination::class);
    }}
