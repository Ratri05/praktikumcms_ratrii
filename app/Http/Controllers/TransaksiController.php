<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Tanggal_Transaksi' => 'required|date',
            'Metode_Pembayaran' => 'required|string|max:30',
            'Total_Pembayaran' => 'required|numeric',
            'PENGGUNA_ID' => 'required|integer|exists:pengguna,id',
            'TIKET_ID' => 'required|integer|exists:tiket,id',
        ]);

        Transaksi::create($request->all());

        return redirect('/transaksi')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $request->validate([
            'Tanggal_Transaksi' => 'required|date',
            'Metode_Pembayaran' => 'required|string|max:30',
            'Total_Pembayaran' => 'required|numeric',
            'PENGGUNA_ID' => 'required|integer|exists:pengguna,id',
            'TIKET_ID' => 'required|integer|exists:tiket,id',
        ]);

        $transaksi->update($request->all());

        return redirect('/transaksi')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect('/transaksi')->with('success', 'Transaksi berhasil dihapus.');
    }
}
