<<<<<<< HEAD
@csrf
@if(isset($karyawan))
    @method('PUT')
@endif

<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $karyawan->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="posisi" class="form-label">Posisi</label>
    <input type="text" name="posisi" class="form-control" id="posisi" value="{{ old('posisi', $karyawan->posisi ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="jadwal_kerja" class="form-label">Jadwal Kerja</label>
    <input type="text" name="jadwal_kerja" class="form-control" id="jadwal_kerja" value="{{ old('jadwal_kerja', $karyawan->jadwal_kerja ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="no_telepon" class="form-label">No Telepon</label>
    <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ old('no_telepon', $karyawan->no_telepon ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{ old('alamat', $karyawan->alamat ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
=======
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
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
