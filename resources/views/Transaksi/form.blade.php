<div class="mb-3">
    <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
    <input type="date" name="tanggal_transaksi" class="form-control" 
           value="{{ old('tanggal_transaksi', $transaksi->tanggal_transaksi ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
    <input type="text" name="metode_pembayaran" class="form-control" 
           value="{{ old('metode_pembayaran', $transaksi->metode_pembayaran ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
    <input type="number" name="total_pembayaran" class="form-control" 
           value="{{ old('total_pembayaran', $transaksi->total_pembayaran ?? '') }}" required>
</div>
