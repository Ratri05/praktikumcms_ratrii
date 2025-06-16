<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
</head>
<body>
    <h2>Form Upload Gambar</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title"><br><br>

        <label>Pilih Gambar:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit">Upload</button>
    </form>

    <hr>

    <h3>Daftar Gambar:</h3>
    @foreach ($images as $img)
        <div style="margin-bottom: 20px;">
            <strong>{{ $img->title }}</strong><br>
            <img src="{{ asset('storage/' . $img->image_path) }}" width="200"><br>
            <form action="{{ route('image.delete', $img->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="color:red;">Hapus</button>
            </form>
        </div>
    @endforeach

</body>
</html>
