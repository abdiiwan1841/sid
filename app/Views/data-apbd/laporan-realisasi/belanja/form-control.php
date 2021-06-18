<div class="form-group row">
  <div class="col-12">
    <h3 class="text-center">Belanja Tidak Langsung</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Belanja Pegawai</label>
    <input type="number" name="belanja_pegawai" class="form-control" value="<?= old('belanja_pegawai') ?? $data->belanja_pegawai; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Belanja Bunga</label>
    <input type="number" name="belanja_bunga" class="form-control" value="<?= old('belanja_bunga') ?? $data->belanja_bunga; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-lg-0">
    <label>Belanja Subsidi</label>
    <input type="number" name="belanja_subsidi" class="form-control" value="<?= old('belanja_subsidi') ?? $data->belanja_subsidi; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Hibah</label>
    <input type="number" name="belanja_hibah" class="form-control" value="<?= old('belanja_hibah') ?? $data->belanja_hibah; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Bantuan sosial</label>
    <input type="number" name="belanja_bantuan_sosial" class="form-control" value="<?= old('belanja_bantuan_sosial') ?? $data->belanja_bantuan_sosial; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Bagi hasil kpd Prop/Kab/Kota dan Pemdes</label>
    <input type="number" name="belanja_bagi_hasil" class="form-control" value="<?= old('belanja_bagi_hasil') ?? $data->belanja_bagi_hasil; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Bantuan keuangan kpd Prop/Kab/Kota dan Pemdes</label>
    <input type="number" name="belanja_bantuan_keuangan" class="form-control" value="<?= old('belanja_bantuan_keuangan') ?? $data->belanja_bantuan_keuangan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja tidak terduga</label>
    <input type="number" name="belanja_tidak_terduga" class="form-control" value="<?= old('belanja_tidak_terduga') ?? $data->belanja_tidak_terduga; ?>">
  </div>
  <div class="col-12 mt-5">
    <h3 class="text-center">Belanja Langsung</h3>
    <hr class="my-3">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Pegawai</label>
    <input type="number" name="belanja_pegawai_langsung" class="form-control" value="<?= old('belanja_pegawai_langsung') ?? $data->belanja_pegawai_langsung; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Barang dan Jasa</label>
    <input type="number" name="belanja_barang_dan_jasa" class="form-control" value="<?= old('belanja_barang_dan_jasa') ?? $data->belanja_barang_dan_jasa; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Belanja Modal</label>
    <input type="number" name="belanja_modal" class="form-control" value="<?= old('belanja_modal') ?? $data->belanja_modal; ?>">
  </div>
</div>