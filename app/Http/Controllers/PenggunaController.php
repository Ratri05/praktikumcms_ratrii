<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|string|max:255',
            'email'       => 'required|email|unique:penggunas',
            'no_telepon'  => 'required|string|max:20',
            'alamat'      => 'required|string',
            'kata_sandi'  => 'required|string|min:6',
        ]);

        $validated['kata_sandi'] = bcrypt($validated['kata_sandi']);
        Pengguna::create($validated);

        return redirect()->route('pengguna.index')
                         ->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::findOrFail($id);

        $validated = $request->validate([
            'nama'        => 'required|string|max:255',
            'email'       => 'required|email|unique:penggunas,email,' . $id,
            'no_telepon'  => 'required|string|max:20',
            'alamat'      => 'required|string',
            'kata_sandi'  => 'nullable|string|min:6',
        ]);

        if ($request->filled('kata_sandi')) {
            $validated['kata_sandi'] = bcrypt($validated['kata_sandi']);
        } else {
            unset($validated['kata_sandi']);
        }

        $pengguna->update($validated);

        return redirect()->route('pengguna.index')
                         ->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        return redirect()->route('pengguna.index')
                         ->with('success', 'Pengguna berhasil dihapus.');
    }

    public function confirmDelete($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.confirmDelete', compact('pengguna'));
    }
}
