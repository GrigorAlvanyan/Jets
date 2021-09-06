<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $extension = $request->image->extension();

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/test'), $imageName);

        $imagePath = public_path('images/test');

        $imageName = explode('.', $imageName);

        $data = [
            'name' => $imageName[0],
            'extension' => $extension,
            'path' => $imagePath,
        ];

        $created = File::create($data);

        return back()
            ->with('success', 'You have successfully upload image.');

    }
}
