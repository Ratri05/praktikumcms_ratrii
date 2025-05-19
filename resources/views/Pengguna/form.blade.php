<form action="{{ $action }}" method="POST"> @csrf @if($method === 'PUT') @method('PUT') @endif
    <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $pengguna->nama ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $pengguna->email ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>No Telepon</label>
    <input type="text" name="no_telepon" value="{{ old('no_telepon', $pengguna->no_telepon ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $pengguna->alamat ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Kata Sandi</label>
    <input type="password" name="kata_sandi" class="form-control" {{ isset($pengguna) ? '' : 'required' }}>
    @if(isset($pengguna))
        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah kata sandi</small>
    @endif
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>
<a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Batal</a>
</form>