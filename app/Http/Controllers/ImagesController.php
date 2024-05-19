<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    //function untuk read semua data dalam database image yang telah diupload
    public function show()
    {
        $images = Images::all();
        return view('welcome', compact('images'));
    }

    //function untuk berpindah ke halaman createImage
    public function create()
    {
        return view('createImage');
    }

    //function untuk menyimpan data ke dalam database
    public function store(Request $request)
    {
        //validasi input yang masuk
        $request->validate([
            'title'=> ['required', 'min:2'],
            'image'=> ['required', 'mimes:png,jpg']
        ]);

        //function untuk penamaan file image
        $fileName = $request->title . '-' . $request->file('image')->getCLientOriginalName();

        //function untuk menyimpan file image ke dalam folder publik
        $request->file('image')->storeAs('public/image', $fileName);

        Images::create([
            'title' => $request ->title,
            'image' => $fileName
        ]);

        return redirect(route('show'));
    }

    public function delete($id)
    {
        $image = Images::findOrFail($id);
        Images::destroy($id);
        Storage::delete('/public/image'. '/' .$image->image);
        return redirect(route('show'));
    }
}
