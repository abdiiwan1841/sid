<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Jenis Barang</label>
    <input type="text" name="jenis_barang" class="form-control" value="<?= old('jenis_barang') ?? $data->jenis_barang; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Kode Barang</label>
    <input type="text" name="kode_barang" class="form-control" value="<?= old('kode_barang') ?? $data->kode_barang; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-lg-0">
    <label>Identitas Barang</label>
    <input type="text" name="identitas_barang" class="form-control" value="<?= old('identitas_barang') ?? $data->identitas_barang; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Asal Usul Barang</label>
    <input type="text" name="asal_barang" class="form-control" value="<?= old('asal_barang') ?? $data->asal_barang; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Tanggal Pengiriman/Pengeluaran</label>
    <div class="input-group date">
      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="tanggal_perolehan" value="<?= old('tanggal_perolehan') ?? $data->tanggal_perolehan; ?>" />
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-calendar"></i>
        </span>
      </div>
    </div>
    <small class="text-muted">bulan/tanggal/tahun</small>
  </div>
</div>