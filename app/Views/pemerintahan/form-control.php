<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Nomor Rekening</label>
    <input type="text" name="no_rek" class="form-control" value="<?= old('no_rek') ?? $data->no_rek; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Jumlah Pengiriman (angka saja)</label>
    <input type="text" name="jumlah_pengiriman" class="form-control" placeholder="cth: 1.000.000" value="<?= old('jumlah_pengiriman') ?? $data->jumlah_pengiriman; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-3 mt-lg-0">
    <label>Jumlah Pengeluaran (angka saja)</label>
    <input type="text" name="jumlah_pengeluaran" class="form-control" placeholder="cth: 1.000.000" value="<?= old('jumlah_pengeluaran') ?? $data->jumlah_pengeluaran; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Tanggal Pengiriman/Pengeluaran</label>
    <div class="input-group date">
      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="dikirim_pada" value="<?= old('dikirim_pada') ?? $data->dikirim_pada; ?>" />
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-calendar"></i>
        </span>
      </div>
    </div>
    <small class="text-muted">bulan/tanggal/tahun</small>
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Tipe Kas :</label>
    <select class="form-control" name="type_kas">
      <option value="pengeluaran">Pengeluaran</option>
      <option value="pengiriman" <?= ($data->type_kas == 'pengiriman') ? 'selected' : '' ?>>Pengiriman</option>
      <?= $data->type_kas ?? '
        <option value="" selected disabled>Pilih salah satu</option>
      ' ?>
    </select>
    <small class="text-muted">Jika pilih pengeluaran maka jumlah kas pengiriman akan bernilai 0, begitu juga sebaliknya</small>
  </div>
</div>