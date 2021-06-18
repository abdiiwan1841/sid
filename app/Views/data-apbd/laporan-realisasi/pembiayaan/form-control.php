<div class="form-group row">
  <div class="col-12">
    <h3 class="text-center">Penerimaan</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>SilPA TA sebelumnya</label>
    <input type="number" name="silpa_ta" class="form-control" value="<?= old('silpa_ta') ?? $data->silpa_ta; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Pencairan Dana cadangan</label>
    <input type="number" name="pencairan_dana_cadangan" class="form-control" value="<?= old('pencairan_dana_cadangan') ?? $data->pencairan_dana_cadangan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-lg-0">
    <label>Hasil Penjualan kekayaan daerah yang dipisahkan</label>
    <input type="number" name="hasil_penjualan_kekayaan_daerah" class="form-control" value="<?= old('hasil_penjualan_kekayaan_daerah') ?? $data->hasil_penjualan_kekayaan_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Penerimaan Pinjaman Daerah dan Obligasi Daerah</label>
    <input type="number" name="penerimaan_pinjaman_daerah" class="form-control" value="<?= old('penerimaan_pinjaman_daerah') ?? $data->penerimaan_pinjaman_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Penerimaan Kembali Pemberian Pinjaman</label>
    <input type="number" name="penerimaan_kembali_pemberian_pinjaman" class="form-control" value="<?= old('penerimaan_kembali_pemberian_pinjaman') ?? $data->penerimaan_kembali_pemberian_pinjaman; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Penerimaan piutang daerah</label>
    <input type="number" name="penerimaan_piutang_daerah" class="form-control" value="<?= old('penerimaan_piutang_daerah') ?? $data->penerimaan_piutang_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Penerimaan Kembali Investasi Dana Bergulir</label>
    <input type="number" name="penerimaan_kembali_investasi_dana_bergulir" class="form-control" value="<?= old('penerimaan_kembali_investasi_dana_bergulir') ?? $data->penerimaan_kembali_investasi_dana_bergulir; ?>">
  </div>
  <div class="col-12 mt-5">
    <h3 class="text-center">Pengeluaran</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pembentukan Dana Cadangan</label>
    <input type="number" name="pembentukan_dana_cadangan" class="form-control" value="<?= old('pembentukan_dana_cadangan') ?? $data->pembentukan_dana_cadangan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Penyertaan Modal (Investasi) Daerah</label>
    <input type="number" name="penyertaan_modal" class="form-control" value="<?= old('penyertaan_modal') ?? $data->penyertaan_modal; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pembayaran Pokok Utang</label>
    <input type="number" name="pembayaran_pokok_utang" class="form-control" value="<?= old('pembayaran_pokok_utang') ?? $data->pembayaran_pokok_utang; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pemberian Pinjaman Daerah</label>
    <input type="number" name="pemberian_pinjaman_daerah" class="form-control" value="<?= old('pemberian_pinjaman_daerah') ?? $data->pemberian_pinjaman_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pembayaran Kegiatan Lanjutan</label>
    <input type="number" name="pembayaran_kegiatan_lanjutan" class="form-control" value="<?= old('pembayaran_kegiatan_lanjutan') ?? $data->pembayaran_kegiatan_lanjutan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pengeluaran Perhitungan Pihak Ketiga</label>
    <input type="number" name="pengeluaran_perhitungan_pihak_ketiga" class="form-control" value="<?= old('pengeluaran_perhitungan_pihak_ketiga') ?? $data->pengeluaran_perhitungan_pihak_ketiga; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Lainnya</label>
    <input type="number" name="lainnya" class="form-control" value="<?= old('lainnya') ?? $data->lainnya; ?>">
  </div>
</div>