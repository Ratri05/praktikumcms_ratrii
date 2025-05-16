@csrf
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengguna->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $pengguna->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="no_telepon" class="form-label">No Telepon</label>
    <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $pengguna->no_telepon ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pengguna->alamat ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="kata_sandi" class="form-label">Kata Sandi</label>
    <input type="password" name="kata_sandi" class="form-control" value="{{ old('kata_sandi', $pengguna->kata_sandi ?? '') }}" required>
</div>
