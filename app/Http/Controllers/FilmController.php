<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }


    public function create()
    {
        return view('films.create');
    }


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


    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }


    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }


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


    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus.');
    }

    public function confirmDelete($id)
{
    $film = Film::findOrFail($id);
    return view('films.confirmDelete', compact('film'));
}

}
