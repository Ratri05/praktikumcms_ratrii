<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Daftar transaksi dummy data
    public function index()
    {
        $transaksi = [
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

        return view('transaksi.index', compact('transaksi'));
    }

    // Menampilkan detail transaksi berdasarkan ID
    public function show($id)
    {
        $transaksi = collect([
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
        ])->firstWhere('id', $id);

        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }

        return view('transaksi.show', compact('transaksi'));
    }

    // Menampilkan form untuk membuat transaksi baru
    public function create()
    {
        return view('transaksi.create');
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'metode_pembayaran' => 'required|string',
            'total_pembayaran' => 'required|numeric'
        ]);

        $newTransaksi = (object)[
            'id' => 3, // Generate ID baru statis untuk sementara
            'tanggal_transaksi' => $validated['tanggal_transaksi'],
            'metode_pembayaran' => $validated['metode_pembayaran'],
            'total_pembayaran' => $validated['total_pembayaran']
        ];

        // Simpan transaksi baru ke dalam array (dalam contoh ini array tidak berkelanjutan)
        // Anda harus memodifikasi ini jika menggunakan database.

        return redirect()->route('transaksi.index');
    }

    // Menampilkan form untuk edit transaksi
    public function edit($id)
    {
        $transaksi = collect([
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
        ])->firstWhere('id', $id);

        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }

        return view('transaksi.edit', compact('transaksi'));
    }

    // Mengupdate transaksi yang sudah ada
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'metode_pembayaran' => 'required|string',
            'total_pembayaran' => 'required|numeric'
        ]);

        $transaksi = collect([
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
        ])->firstWhere('id', $id);

        if (!$transaksi) {
            abort(404, 'Transaksi tidak ditemukan.');
        }

        // Update transaksi dengan data baru
        $transaksi->tanggal_transaksi = $validated['tanggal_transaksi'];
        $transaksi->metode_pembayaran = $validated['metode_pembayaran'];
        $transaksi->total_pembayaran = $validated['total_pembayaran'];

        return redirect()->route('transaksi.index');
    }

    // Menghapus transaksi berdasarkan ID
    public function destroy($id)
    {
        $transaksiList = [
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

        $transaksiIndex = collect($transaksiList)->search(fn($item) => $item->id == $id);

        if ($transaksiIndex === false) {
            abort(404, 'Transaksi tidak ditemukan.');
        }

        // Hapus transaksi dari array (sama seperti data array)
        array_splice($transaksiList, $transaksiIndex, 1);

        return redirect()->route('transaksi.index');
    }
}
