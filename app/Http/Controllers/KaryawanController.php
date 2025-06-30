<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        try {
            $karyawans = Karyawan::all();
            return view('karyawan.index', compact('karyawans'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memuat data karyawan.');
        }
    }

    public function create()
    {
        try {
            return view('karyawan.create');
        } catch (\Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Gagal membuka halaman tambah karyawan.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'posisi' => 'required',
                'jadwal_kerja' => 'required',
                'no_telepon' => 'required',
                'alamat' => 'required',
            ]);

            Karyawan::create($request->all());
            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan karyawan.')->withInput();
        }
    }

    public function edit($id)
    {
        try {
            $karyawan = Karyawan::findOrFail($id);
            return view('karyawan.edit', compact('karyawan'));
        } catch (\Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Data karyawan tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'posisi' => 'required',
                'jadwal_kerja' => 'required',
                'no_telepon' => 'required',
                'alamat' => 'required',
            ]);

            $karyawan = Karyawan::findOrFail($id);
            $karyawan->update($request->all());

            return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Gagal memperbarui data. Karyawan tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $karyawan = Karyawan::findOrFail($id);
            $karyawan->delete();
            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Gagal menghapus data. Karyawan tidak ditemukan.');
        }
    }

    public function show($id)
{
    try {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    } catch (\Exception $e) {
        return redirect()->route('karyawan.index')->with('error', 'Data karyawan tidak ditemukan.');
    }
}
}
