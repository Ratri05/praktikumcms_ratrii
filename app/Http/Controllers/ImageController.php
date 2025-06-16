<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create()
    {
        $images = Image::all();
        return view('upload', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'title' => $request->title,
            'image_path' => $path
        ]);

        return redirect('/upload')->with('success', 'Gambar berhasil diupload!')->with('image', $image);
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        // Hapus file fisik
        Storage::disk('public')->delete($image->image_path);

        // Hapus dari database
        $image->delete();

        return redirect('/upload')->with('success', 'Gambar berhasil dihapus.');
    }
}
