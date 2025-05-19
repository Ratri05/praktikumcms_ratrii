<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Method untuk mendapatkan data dummy transaksi
    private function getDummyData()
    {
        return [
            (object)[
                'id' => 1,
                'tanggal_transaksi' => '2025-05-01',
                'metode_pembayaran' => 'E-Wallet',
                'total_pembayaran' => 100000
            ],
            (object)[
                'id' => 2,
                'tanggal_transaksi' => '2025-05-02',
                'metode_pembayaran' => 'Tunai',
                'total_pembayaran' => 50000
            ]
        ];
    }

    public function index()
    {
        $transaksi = $this->getDummyData();
        return view('transaksi.index', compact('transaksi'));
    }

    public function show($id)
    {
        $transaksi = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }
        return view('transaksi.show', compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'metode_pembayaran' => 'required|string',
            'total_pembayaran' => 'required|numeric'
        ]);

        $newTransaksi = (object)[
            'id' => rand(3, 100),
            'tanggal_transaksi' => $validated['tanggal_transaksi'],
            'metode_pembayaran' => $validated['metode_pembayaran'],
            'total_pembayaran' => $validated['total_pembayaran']
        ];

        $transaksi = $this->getDummyData();
        $transaksi[] = $newTransaksi;

        return view('transaksi.index', compact('transaksi'))
            ->with('success', 'Transaksi berhasil ditambahkan (simulasi).');
    }

    public function edit($id)
    {
        $transaksi = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'metode_pembayaran' => 'required|string',
            'total_pembayaran' => 'required|numeric'
        ]);

        $transaksiList = collect($this->getDummyData())->map(function ($transaksi) use ($id, $validated) {
            if ($transaksi->id == $id) {
                $transaksi->tanggal_transaksi = $validated['tanggal_transaksi'];
                $transaksi->metode_pembayaran = $validated['metode_pembayaran'];
                $transaksi->total_pembayaran = $validated['total_pembayaran'];
            }
            return $transaksi;
        })->all();

        return view('transaksi.index', ['transaksi' => $transaksiList])
            ->with('success', 'Transaksi berhasil diperbarui (simulasi).');
    }

    public function destroy($id)
    {
        $transaksiList = collect($this->getDummyData())->reject(function ($transaksi) use ($id) {
            return $transaksi->id == $id;
        })->values()->all();

        return view('transaksi.index', ['transaksi' => $transaksiList])
            ->with('success', 'Transaksi berhasil dihapus (simulasi).');
    }

    public function confirmDelete($id)
    {
        $transaksi = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }
        return view('transaksi.confirmDelete', compact('transaksi'));
    }
}
