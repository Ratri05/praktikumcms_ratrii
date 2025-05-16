<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Method untuk data dummy transaksi
    private function getDummyData()
    {
        return [
            [
                'id' => 1,
                'tanggal_transaksi' => '2025-05-01',
                'metode_pembayaran' => 'Kartu Kredit',
                'total_pembayaran' => 75000,
            ],
            [
                'id' => 2,
                'tanggal_transaksi' => '2025-05-02',
                'metode_pembayaran' => 'Tunai',
                'total_pembayaran' => 50000,
            ],
        ];
    }

    // Menampilkan halaman konfirmasi hapus
    public function confirmDelete($id)
    {
        $transaksiArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$transaksiArray) {
            abort(404, 'Transaksi tidak ditemukan.');
        }
        $transaksi = (object) $transaksiArray;
        return view('transaksi.confirmDelete', compact('transaksi'));
    }

    // Metode lain seperti index, create, store, edit, update, destroy bisa kamu buat serupa
}
