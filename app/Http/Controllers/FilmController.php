<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FilmController extends Controller
{
    // Untuk keperluan tugas: menampilkan data film menggunakan findOrFail()
    public function showDetail($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    // Untuk keperluan tugas: menampilkan data film dengan try-catch
    public function showWithTryCatch($id)
    {
        try {
            $film = Film::findOrFail($id);
            return view('films.show', compact('film'));
        } catch (ModelNotFoundException $e) {
            return response()->view('errors.notfound', [], 404);
        }
    }

    // Index
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    // Create
    public function create()
    {
        return view('films.create');
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'sutradara' => 'required|string|max:255',
            'pemeran_utama' => 'required|string|max:255',
            'bahasa' => 'required|string|max:255',
            'tanggal_rilis' => 'required|date',
        ]);

        Film::create($request->all());

        return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan.');
    }

    // Show
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    // Edit
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'sutradara' => 'required|string|max:255',
            'pemeran_utama' => 'required|string|max:255',
            'bahasa' => 'required|string|max:255',
            'tanggal_rilis' => 'required|date',
        ]);

        $film = Film::findOrFail($id);
        $film->update($request->all());

        return redirect()->route('films.index')->with('success', 'Film berhasil diperbarui.');
    }

    // Destroy
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus.');
    }

    // Konfirmasi Hapus
    public function confirmDelete($id)
    {
        $film = Film::findOrFail($id);
        return view('films.confirmDelete', compact('film'));
    }
}
