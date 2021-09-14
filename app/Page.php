<?php

namespace App;

use App\Traits\Historable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Page extends Model
{
//    use Historable;

    protected $guarded = [];

    public function sections()
    {
        return $this->hasMany(PageSection::class);
    }

    public function file()
    {
        return $this->hasOne(File::class, 'id', 'image_id');
    }


//
//    public static function boot() {
//
//        parent::boot();
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::creating(function($item) {
//            Log::info('Creating event call: '.$item);
//
//            $item->slug = Str::slug($item->name);
//        });
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::created(function($item) {
//            /*
//                Write Logic Here
//            */
//
//            Log::info('Created event call: '.$item);
//        });
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::updating(function($item) {
//            Log::info('Updating event call: '.$item);
//
//            $item->slug = Str::slug($item->name);
//        });
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::updated(function($item) {
//            /*
//                Write Logic Here
//            */
//
//            Log::info('Updated event call: '.$item);
//        });
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::deleted(function($item) {
//            Log::info('Deleted event call: '.$item);
//        });
//    }


}
