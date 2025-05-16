<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioController extends Controller
{
    private function getDummyData()
    {
        return [
            (object)[
                'id' => 1,
                'nomor_studio' => '1',
                'kapasitas' => 100,
                'tipe_studio' => 'Reguler'
            ],
            (object)[
                'id' => 2,
                'nomor_studio' => '2',
                'kapasitas' => 50,
                'tipe_studio' => 'VIP'
            ]
        ];
    }

    public function index()
    {
        $studio = $this->getDummyData();
        return view('studio.index', compact('studio'));
    }

    public function show($id)
    {
        $studio = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$studio) abort(404, 'Studio tidak ditemukan.');
        return view('studio.show', compact('studio'));
    }

    public function create()
    {
        return view('studio.create');
    }

    public function store(Request $request)
    {
        // Simulasi simpan data
        $newStudio = (object)[
            'id' => rand(3, 100), // Simulasi ID baru
            'nomor_studio' => $request->nomor_studio,
            'kapasitas' => $request->kapasitas,
            'tipe_studio' => $request->tipe_studio
        ];

        // Return kembali ke index (dummy)
        $studio = $this->getDummyData();
        $studio[] = $newStudio;

        return view('studio.index', compact('studio'))->with('success', 'Studio baru ditambahkan (simulasi).');
    }

    public function edit($id)
    {
        $studio = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$studio) abort(404, 'Studio tidak ditemukan.');
        return view('studio.edit', compact('studio'));
    }

    public function update(Request $request, $id)
    {
        // Simulasi update
        $studioList = collect($this->getDummyData())->map(function ($studio) use ($id, $request) {
            if ($studio->id == $id) {
                $studio->nomor_studio = $request->nomor_studio;
                $studio->kapasitas = $request->kapasitas;
                $studio->tipe_studio = $request->tipe_studio;
            }
            return $studio;
        })->all();

        return view('studio.index', ['studio' => $studioList])
            ->with('success', 'Data studio berhasil diubah (simulasi).');
    }

    public function destroy($id)
    {
        // Simulasi hapus
        $studioList = collect($this->getDummyData())->reject(function ($studio) use ($id) {
            return $studio->id == $id;
        })->values()->all();

        return view('studio.index', ['studio' => $studioList])
            ->with('success', 'Studio berhasil dihapus (simulasi).');
    }
<<<<<<< HEAD
    public function confirmDelete($id)
{
    $studioArray = collect($this->getDummyData())->firstWhere('id', (int)$id);
    if (!$studioArray) {
        abort(404);
    }
    $studio = (object) $studioArray;
    return view('studio.confirmDelete', compact('studio'));
}


=======
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
}