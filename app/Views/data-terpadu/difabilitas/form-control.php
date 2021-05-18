<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Penduduk</label>
    <select class="form-control select2" name="penduduk_id" id="kt_select2_4" data-placeholder="Pilih Penduduk">
      <?php if (isset($data_penduduk)) : ?>
        <option value="<?= $data_penduduk->id; ?>" selected><?= $data_penduduk->nama_lengkap; ?></option>
      <?php else : ?>
        <option value="" selected disabled>Pilih Penduduk</option>
      <?php endif ?>
      <?php foreach ($penduduk as $p) : ?>
        <option value="<?= $p->id; ?>"><?= $p->nama_lengkap; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Penyandang Difabilitas</label>
    <input name="penyandang_difabilitas" class="form-control" placeholder="cth: kursi roda" value="<?= old('penyandang_difabilitas') ?? $difabilitas->penyandang_difabilitas; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Keterangan</label>
    <textarea rows="5" name="keterangan" class="form-control" placeholder="cth: difabilitas sejak lahir"><?= old('keterangan') ?? $difabilitas->keterangan; ?></textarea>
  </div>
</div>