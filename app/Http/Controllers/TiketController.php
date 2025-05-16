<?php
<<<<<<< HEAD

=======
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
<<<<<<< HEAD
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

=======
    // Daftar tiket dummy data
    private $tiketList;

    // Konstruktor untuk menginisialisasi data tiket
    public function __construct()
    {
        $this->tiketList = [
            (object)[
                'id' => 1,
                'nomor_kursi' => 'A1',
                'status' => 'Terpesan',
                'harga_tiket' => 50000
            ],
            (object)[
                'id' => 2,
                'nomor_kursi' => 'A2',
                'status' => 'Tersedia',
                'harga_tiket' => 50000
            ]
        ];
    }

    // Menampilkan daftar tiket
    public function index()
    {
        return view('tiket.index', ['tiket' => $this->tiketList]);
    }

    // Menampilkan detail tiket berdasarkan ID
    public function show($id)
    {
        $tiket = collect($this->tiketList)->firstWhere('id', $id);

        if (!$tiket) {
            abort(404, 'Tiket tidak ditemukan.');
        }

        return view('tiket.show', compact('tiket'));
    }

    // Menampilkan form untuk membuat tiket baru
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
    public function create()
    {
        return view('tiket.create');
    }

<<<<<<< HEAD
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
=======
    // Menyimpan tiket baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_kursi' => 'required',
            'status' => 'required',
            'harga_tiket' => 'required|numeric'
        ]);

        $newTiket = (object)[
            'id' => count($this->tiketList) + 1, // Generate ID baru
            'nomor_kursi' => $validated['nomor_kursi'],
            'status' => $validated['status'],
            'harga_tiket' => $validated['harga_tiket']
        ];

        $this->tiketList[] = $newTiket; // Tambahkan tiket baru ke list

        return redirect()->route('tiket.index');
    }

    // Menampilkan form untuk edit tiket
    public function edit($id)
    {
        $tiket = collect($this->tiketList)->firstWhere('id', $id);

        if (!$tiket) {
            abort(404, 'Tiket tidak ditemukan.');
        }

        return view('tiket.edit', compact('tiket'));
    }

    // Mengupdate tiket yang sudah ada
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nomor_kursi' => 'required',
            'status' => 'required',
            'harga_tiket' => 'required|numeric'
        ]);

        $tiket = collect($this->tiketList)->firstWhere('id', $id);

        if (!$tiket) {
            abort(404, 'Tiket tidak ditemukan.');
        }

        // Update tiket dengan data baru
        $tiket->nomor_kursi = $validated['nomor_kursi'];
        $tiket->status = $validated['status'];
        $tiket->harga_tiket = $validated['harga_tiket'];

        return redirect()->route('tiket.index');
    }

    // Menghapus tiket berdasarkan ID
    public function destroy($id)
    {
        $tiketIndex = collect($this->tiketList)->search(fn($item) => $item->id == $id);

        if ($tiketIndex === false) {
            abort(404, 'Tiket tidak ditemukan.');
        }

        // Hapus tiket dari array
        array_splice($this->tiketList, $tiketIndex, 1);

        return redirect()->route('tiket.index');
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
    }
}
