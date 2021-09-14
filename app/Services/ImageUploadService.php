<?php

namespace App\Services;

use App\File;
use Illuminate\Http\Request;

class ImageUploadService
{

    public function imageUploadPost($images, $dir = '')
    {
        $path = !empty($dir) ? "images/{$dir}" : 'images';
        $publicPath = public_path($path);
        $lastId = 0;

        foreach ($images as $image) {
            $extension = $image->extension();

            $imageName = uniqid() . '.' . $image->extension();

            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }

            $image->move($publicPath, $imageName);

            $data = [
                'name' => $imageName,
                'extension' => $extension,
                'path' => $publicPath,
            ];

            $lastId = File::create($data)->id;
        }

        return $lastId;

    }

}
