<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        $studios = Studio::all();
        return view('studio.index', compact('studios'));
    }

    public function create()
    {
        return view('studio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nomor_Studio' => 'required|integer',
            'Kapasitas' => 'required|integer',
            'Tipe_Studio' => 'required|string|max:30',
            'TIKET_ID' => 'nullable|integer|exists:tiket,id',
        ]);

        Studio::create($request->all());

        return redirect('/studio')->with('success', 'Studio berhasil ditambahkan.');
    }

    public function show($id)
    {
        $studio = Studio::findOrFail($id);
        return view('studio.show', compact('studio'));
    }

    public function edit($id)
    {
        $studio = Studio::findOrFail($id);
        return view('studio.edit', compact('studio'));
    }

    public function update(Request $request, $id)
    {
        $studio = Studio::findOrFail($id);

        $request->validate([
            'Nomor_Studio' => 'required|integer',
            'Kapasitas' => 'required|integer',
            'Tipe_Studio' => 'required|string|max:30',
            'TIKET_ID' => 'nullable|integer|exists:tiket,id',
        ]);

        $studio->update($request->all());

        return redirect('/studio')->with('success', 'Studio berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();

        return redirect('/studio')->with('success', 'Studio berhasil dihapus.');
    }
    public function confirmDelete($id)
{
    $studio = \App\Models\Studio::findOrFail($id);
    return view('studio.confirmDelete', compact('studio'));
}

}
