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
    <label>Pernah Sekolah ?</label>
    <select class="form-control" name="pernah_sekolah">
      <option value="Ya">Ya</option>
      <option value="Tidak" <?= ($buta_huruf->pernah_sekolah == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
      <?= $buta_huruf->pernah_sekolah ?? '
        <option value="" selected disabled>Pilih</option>
      ' ?>
    </select>
  </div>
</div>