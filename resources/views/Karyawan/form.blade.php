<div class="mb-3">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $karyawan->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="posisi">Posisi</label>
    <input type="text" name="posisi" class="form-control" value="{{ old('posisi', $karyawan->posisi ?? '') }}">
</div>
<div class="mb-3">
    <label for="jadwal_kerja">Jadwal Kerja</label>
    <input type="text" name="jadwal_kerja" class="form-control" value="{{ old('jadwal_kerja', $karyawan->jadwal_kerja ?? '') }}">
</div>
<div class="mb-3">
    <label for="no_telepon">No Telepon</label>
    <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $karyawan->no_telepon ?? '') }}">
</div>
<div class="mb-3">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $karyawan->alamat ?? '') }}</textarea>
</div>
