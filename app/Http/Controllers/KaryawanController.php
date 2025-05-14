<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = [
            ['id' => 1, 'nama' => 'Rudi', 'posisi' => 'Kasir', 'jadwal_kerja' => '08:00 - 16:00', 'no_telepon' => '08123456789', 'alamat' => 'Jl. Merdeka'],
            ['id' => 2, 'nama' => 'Sari', 'posisi' => 'Manajer', 'jadwal_kerja' => '09:00 - 17:00', 'no_telepon' => '08234567890', 'alamat' => 'Jl. Sudirman']
        ];
        return view('karyawan.index', compact('karyawan'));
    }

        public function create()
    {
        return view('karyawan.create'); // Mengarahkan ke view 'create.blade.php'
    }

        public function edit($id)
    {
         $karyawanList = [
        ['id' => 1, 'nama' => 'Rudi', 'posisi' => 'Kasir', 'jadwal_kerja' => '08:00 - 16:00', 'no_telepon' => '08123456789', 'alamat' => 'Jl. Merdeka'],
        ['id' => 2, 'nama' => 'Sari', 'posisi' => 'Manajer', 'jadwal_kerja' => '09:00 - 17:00', 'no_telepon' => '08234567890', 'alamat' => 'Jl. Sudirman']
        ];

        $karyawan = collect($karyawanList)->firstWhere('id', $id);

        return view('karyawan.edit', compact('karyawan'));
    }
    
public function update(Request $request, $id)
{
    // Dummy data awal
    $karyawanList = [
        ['id' => 1, 'nama' => 'Rudi', 'posisi' => 'Kasir', 'jadwal_kerja' => '08:00 - 16:00', 'no_telepon' => '08123456789', 'alamat' => 'Jl. Merdeka'],
        ['id' => 2, 'nama' => 'Sari', 'posisi' => 'Manajer', 'jadwal_kerja' => '09:00 - 17:00', 'no_telepon' => '08234567890', 'alamat' => 'Jl. Sudirman']
    ];

    // Simulasi proses update (dalam real case, ini akan update ke DB)
    foreach ($karyawanList as &$karyawan) {
        if ($karyawan['id'] == $id) {
            $karyawan['nama'] = $request->input('nama');
            $karyawan['posisi'] = $request->input('posisi');
            $karyawan['jadwal_kerja'] = $request->input('jadwal_kerja');
            $karyawan['no_telepon'] = $request->input('no_telepon');
            $karyawan['alamat'] = $request->input('alamat');
            break;
        }
    }

    // Karena ini dummy, kita hanya kirim ulang data ke index sebagai simulasi
    return view('karyawan.index', ['karyawan' => $karyawanList])
        ->with('success', 'Data karyawan berhasil diperbarui (simulasi)');
}

public function show($id)
{
    $karyawanList = [
        ['id' => 1, 'nama' => 'Rudi', 'posisi' => 'Kasir', 'jadwal_kerja' => '08:00 - 16:00', 'no_telepon' => '08123456789', 'alamat' => 'Jl. Merdeka'],
        ['id' => 2, 'nama' => 'Sari', 'posisi' => 'Manajer', 'jadwal_kerja' => '09:00 - 17:00', 'no_telepon' => '08234567890', 'alamat' => 'Jl. Sudirman']
    ];

    $karyawan = collect($karyawanList)->firstWhere('id', $id);

    if (!$karyawan) {
        abort(404, 'Karyawan tidak ditemukan');
    }

    return view('karyawan.show', compact('karyawan'));
}

public function destroy($id)
{
    $karyawanList = [
        ['id' => 1, 'nama' => 'Rudi', 'posisi' => 'Kasir', 'jadwal_kerja' => '08:00 - 16:00', 'no_telepon' => '08123456789', 'alamat' => 'Jl. Merdeka'],
        ['id' => 2, 'nama' => 'Sari', 'posisi' => 'Manajer', 'jadwal_kerja' => '09:00 - 17:00', 'no_telepon' => '08234567890', 'alamat' => 'Jl. Sudirman']
    ];

    // Simulasi hapus data
    $karyawanList = collect($karyawanList)->reject(function ($karyawan) use ($id) {
        return $karyawan['id'] == $id;
    })->values()->all();

    // Tampilkan kembali halaman index setelah "penghapusan"
    return view('karyawan.index', ['karyawan' => $karyawanList])
        ->with('success', 'Data karyawan berhasil dihapus (simulasi)');
}


}
