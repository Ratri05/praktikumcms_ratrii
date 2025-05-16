<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    private function getDummyData()
    {
        return [
            [
                'id' => 1,
                'nomor_kursi' => 'A1',
                'status' => 'Tersedia',
                'harga_tiket' => 50000,
                'film' => 'Avengers',
                'studio' => 'Studio 1',
                'jadwal' => '10:00',
            ],
            [
                'id' => 2,
                'nomor_kursi' => 'B2',
                'status' => 'Terjual',
                'harga_tiket' => 45000,
                'film' => 'Frozen',
                'studio' => 'Studio 2',
                'jadwal' => '13:00',
            ],
        ];
    }

    public function index()
    {
        $tiket = $this->getDummyData();
        return view('tiket.index', compact('tiket'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('tiket.index')->with('success', 'Data tiket berhasil disimpan (simulasi).');
    }

    public function show($id)
    {
        $tiketArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$tiketArray) {
            abort(404);
        }
        $tiket = (object) $tiketArray;
        return view('tiket.show', compact('tiket'));
    }

    public function edit($id)
    {
        $tiketArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$tiketArray) {
            abort(404);
        }
        $tiket = (object) $tiketArray;
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('tiket.index')->with('success', 'Data tiket berhasil diperbarui (simulasi).');
    }

    public function confirmDelete($id)
    {
        $tiketArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$tiketArray) {
            abort(404);
        }
        $tiket = (object) $tiketArray;
        return view('tiket.confirmDelete', compact('tiket'));
    }

    public function destroy($id)
    {
        return redirect()->route('tiket.index')->with('success', 'Data tiket berhasil dihapus (simulasi).');
    }
}
