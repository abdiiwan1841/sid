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
    <label>Alasan Menganggur</label>
    <textarea rows="5" name="alasan_menganggur" class="form-control" placeholder="Tulis alasannya ..">
      <?= old('alasan_menganggur') ?? $tuna_karya->alasan_menganggur; ?>
    </textarea>
  </div>
</div>