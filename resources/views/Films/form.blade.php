<div style="background-color: #fff8dc; padding: 20px; border-radius: 10px; border: 1px solid #d4af37;">
    <div style="margin-bottom: 15px;">
        <label for="judul" style="display: block; font-weight: bold; color: #b8860b;">Judul Film</label>
        <input type="text" name="judul" id="judul" class="form-control" 
               value="{{ old('judul', $film->judul ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="durasi" style="display: block; font-weight: bold; color: #b8860b;">Durasi</label>
        <input type="text" name="durasi" id="durasi" class="form-control" 
               value="{{ old('durasi', $film->durasi ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="sutradara" style="display: block; font-weight: bold; color: #b8860b;">Sutradara</label>
        <input type="text" name="sutradara" id="sutradara" class="form-control" 
               value="{{ old('sutradara', $film->sutradara ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="pemeran_utama" style="display: block; font-weight: bold; color: #b8860b;">Pemeran Utama</label>
        <input type="text" name="pemeran_utama" id="pemeran_utama" class="form-control" 
               value="{{ old('pemeran_utama', $film->pemeran_utama ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="bahasa" style="display: block; font-weight: bold; color: #b8860b;">Bahasa</label>
        <input type="text" name="bahasa" id="bahasa" class="form-control" 
               value="{{ old('bahasa', $film->bahasa ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="tanggal_rilis" style="display: block; font-weight: bold; color: #b8860b;">Tanggal Rilis</label>
        <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control" 
               value="{{ old('tanggal_rilis', $film->tanggal_rilis ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <button type="submit" style="background-color: #ffd700; color: #000; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">
        Simpan
    </button>
</div>
