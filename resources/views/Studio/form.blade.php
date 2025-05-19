<div style="background-color:rgb(235, 189, 7); padding: 20px; border-radius: 10px; border: 1px solid #d4af37;">
    <div style="margin-bottom: 15px;">
        <label for="nomor_studio" style="display: block; font-weight: bold; color: #b8860b;">Nomor Studio</label>
        <input type="text" name="nomor_studio" id="nomor_studio" class="form-control" 
               value="{{ old('nomor_studio', $studio->nomor_studio ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="kapasitas" style="display: block; font-weight: bold; color: #b8860b;">Kapasitas</label>
        <input type="number" name="kapasitas" id="kapasitas" class="form-control" 
               value="{{ old('kapasitas', $studio->kapasitas ?? '') }}" 
               style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="tipe_studio" style="display: block; font-weight: bold; color: #b8860b;">Tipe Studio</label>
        <select name="tipe_studio" id="tipe_studio" class="form-control" 
                style="width: 100%; padding: 8px; border: 1px solid #d4af37; border-radius: 5px;">
            <option value="Reguler" {{ (old('tipe_studio', $studio->tipe_studio ?? '') == 'Reguler') ? 'selected' : '' }}>Reguler</option>
            <option value="VIP" {{ (old('tipe_studio', $studio->tipe_studio ?? '') == 'VIP') ? 'selected' : '' }}>VIP</option>
        </select>
    </div>

    <button type="submit" style="background-color: #ffd700; color: #000; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">
        Simpan
    </button>
</div>
