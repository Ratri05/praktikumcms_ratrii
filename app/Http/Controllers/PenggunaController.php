<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    // Fungsi untuk mengambil dummy data
    private function getDummyData()
    {
        return [
            (object)[
                'id' => 1,
                'nama' => 'Dina',
                'email' => 'dina@example.com',
                'no_telepon' => '0811223344',
                'alamat' => 'Jl. Kenangan',
                'kata_sandi' => '****'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Aldi',
                'email' => 'aldi@example.com',
                'no_telepon' => '0811334455',
                'alamat' => 'Jl. Mawar',
                'kata_sandi' => '****'
            ]
        ];
    }

    public function index()
    {
        $pengguna = $this->getDummyData();
        return view('pengguna.index', compact('pengguna'));
    }

    public function show($id)
    {
        $pengguna = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$pengguna) {
            abort(404, 'Pengguna tidak ditemukan');
        }

        return view('pengguna.show', compact('pengguna'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $newUser = (object)[
            'id' => rand(3, 100),
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'kata_sandi' => $request->kata_sandi
        ];

        $pengguna = $this->getDummyData();
        $pengguna[] = $newUser;

        return view('pengguna.index', compact('pengguna'))
            ->with('success', 'Pengguna berhasil ditambahkan (simulasi).');
    }

    public function edit($id)
    {
        $pengguna = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$pengguna) {
            abort(404, 'Pengguna tidak ditemukan');
        }

        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = collect($this->getDummyData())->map(function ($item) use ($id, $request) {
            if ($item->id == $id) {
                $item->nama = $request->nama;
                $item->email = $request->email;
                $item->no_telepon = $request->no_telepon;
                $item->alamat = $request->alamat;
                $item->kata_sandi = $request->kata_sandi;
            }
            return $item;
        })->all();

        return view('pengguna.index', ['pengguna' => $pengguna])
            ->with('success', 'Pengguna berhasil diubah (simulasi).');
    }

    public function destroy($id)
    {
        $pengguna = collect($this->getDummyData())->reject(function ($item) use ($id) {
            return $item->id == $id;
        })->values()->all();

        return view('pengguna.index', ['pengguna' => $pengguna])
            ->with('success', 'Pengguna berhasil dihapus (simulasi).');
    }
<<<<<<< HEAD
    public function confirmDelete($id)
    {
        $penggunaArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
        if (!$penggunaArray) {
            abort(404);
        }
        $pengguna = (object) $penggunaArray;
        return view('pengguna.confirmDelete', compact('pengguna'));
    }

=======
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
}
