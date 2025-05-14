<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private function getDummyData()
    {
        return [
            (object)[
                'id' => 1,
                'judul' => 'Avengers',
                'durasi' => '2h 30m',
                'sutradara' => 'Joss Whedon',
                'pemeran_utama' => 'Robert Downey Jr.',
                'bahasa' => 'Inggris',
                'tanggal_rilis' => '2012-05-04'
            ],
            (object)[
                'id' => 2,
                'judul' => 'Laskar Pelangi',
                'durasi' => '2h',
                'sutradara' => 'Riri Riza',
                'pemeran_utama' => 'Cut Mini',
                'bahasa' => 'Indonesia',
                'tanggal_rilis' => '2008-09-25'
            ]
        ];
    }

    public function index()
    {
        $film = $this->getDummyData();
        return view('film.index', compact('film'));
    }

    public function show($id)
    {
        $film = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$film) abort(404, 'Film tidak ditemukan');
        return view('film.show', compact('film'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $newFilm = (object)[
            'id' => rand(3, 100),
            'judul' => $request->judul,
            'durasi' => $request->durasi,
            'sutradara' => $request->sutradara,
            'pemeran_utama' => $request->pemeran_utama,
            'bahasa' => $request->bahasa,
            'tanggal_rilis' => $request->tanggal_rilis
        ];

        $film = $this->getDummyData();
        $film[] = $newFilm;

        return view('film.index', compact('film'))
            ->with('success', 'Film berhasil ditambahkan (simulasi).');
    }

    public function edit($id)
    {
        $film = collect($this->getDummyData())->firstWhere('id', $id);
        if (!$film) abort(404, 'Film tidak ditemukan');
        return view('film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        $filmList = collect($this->getDummyData())->map(function ($film) use ($id, $request) {
            if ($film->id == $id) {
                $film->judul = $request->judul;
                $film->durasi = $request->durasi;
                $film->sutradara = $request->sutradara;
                $film->pemeran_utama = $request->pemeran_utama;
                $film->bahasa = $request->bahasa;
                $film->tanggal_rilis = $request->tanggal_rilis;
            }
            return $film;
        })->all();

        return view('film.index', ['film' => $filmList])
            ->with('success', 'Data film berhasil diubah (simulasi).');
    }

    public function destroy($id)
    {
        $filmList = collect($this->getDummyData())->reject(function ($film) use ($id) {
            return $film->id == $id;
        })->values()->all();

        return view('film.index', ['film' => $filmList])
            ->with('success', 'Film berhasil dihapus (simulasi).');
    }
}
