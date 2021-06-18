<div class="form-group row">
  <div class="col-12">
    <h3 class="text-center">PAD</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Pajak daerah</label>
    <input type="number" name="pajak_daerah" class="form-control" value="<?= old('pajak_daerah') ?? $data->pajak_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Retribusi daerah</label>
    <input type="number" name="retribusi_daerah" class="form-control" value="<?= old('retribusi_daerah') ?? $data->retribusi_daerah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-lg-0">
    <label>Hasil pengelolaan kekayaan daerah yang dipisahkan</label>
    <input type="number" name="hasil_pengelolaan_kekayaan" class="form-control" value="<?= old('hasil_pengelolaan_kekayaan') ?? $data->hasil_pengelolaan_kekayaan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Lain-lain PAD yang sah</label>
    <input type="number" name="lainnya_pad_sah" class="form-control" value="<?= old('lainnya_pad_sah') ?? $data->lainnya_pad_sah; ?>">
  </div>
  <div class="col-12 mt-5">
    <h3 class="text-center">Daper</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana bagi hasil pajak/bagi hasil bukan pajak</label>
    <input type="number" name="dana_hasil_pajak" class="form-control" value="<?= old('dana_hasil_pajak') ?? $data->dana_hasil_pajak; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana alokasi umum</label>
    <input type="number" name="dana_alokasi_umum" class="form-control" value="<?= old('dana_alokasi_umum') ?? $data->dana_alokasi_umum; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana alokasi khusus</label>
    <input type="number" name="dana_alokasi_khusus" class="form-control" value="<?= old('dana_alokasi_khusus') ?? $data->dana_alokasi_khusus; ?>">
  </div>
  <div class="col-12 mt-5">
    <h3 class="text-center">Lain-lain pendapatan daerah yang sah</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Hibah</label>
    <input type="number" name="hibah" class="form-control" value="<?= old('hibah') ?? $data->hibah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana darurat</label>
    <input type="number" name="dana_darurat" class="form-control" value="<?= old('dana_darurat') ?? $data->dana_darurat; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana bagi hasil pajak dari Propinsi dan Pemda lainnya</label>
    <input type="number" name="dana_hasil_pajak_dari_provinsi" class="form-control" value="<?= old('dana_hasil_pajak_dari_provinsi') ?? $data->dana_hasil_pajak_dari_provinsi; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dana penyesuaian dan otonomi khusus</label>
    <input type="number" name="dana_penyesuaian" class="form-control" value="<?= old('dana_penyesuaian') ?? $data->dana_penyesuaian; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Bantuan keuangan dari Propinsi atau Pemda lainnya</label>
    <input type="number" name="bantuan_keuangan" class="form-control" value="<?= old('bantuan_keuangan') ?? $data->bantuan_keuangan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Lain-lain</label>
    <input type="number" name="lain_lain" class="form-control" value="<?= old('lain_lain') ?? $data->lain_lain; ?>">
  </div>
</div>