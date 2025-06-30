<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('tiket.index', compact('tikets'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nomor_Kursi' => 'required|string|max:30',
            'Status' => 'required|string|max:30',
            'Harga_Tiket' => 'required|numeric',
            'FILM_ID' => 'required|integer|exists:film,id',
        ]);

        Tiket::create($request->all());

        return redirect('/tiket')->with('success', 'Tiket berhasil ditambahkan.');
    }

    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.show', compact('tiket'));
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $tiket = Tiket::findOrFail($id);

        $request->validate([
            'Nomor_Kursi' => 'required|string|max:30',
            'Status' => 'required|string|max:30',
            'Harga_Tiket' => 'required|numeric',
            'FILM_ID' => 'required|integer|exists:film,id',
        ]);

        $tiket->update($request->all());

        return redirect('/tiket')->with('success', 'Tiket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect('/tiket')->with('success', 'Tiket berhasil dihapus.');
    }
}
