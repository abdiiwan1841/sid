<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Dusun</label>
    <input type="text" name="dusun" class="form-control" placeholder="Nama Dusun" value="<?= old('dusun') ?? $data->dusun; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Kepala Dusun</label>
    <select class="form-control select2" name="kepala_dusun" id="kt_select2_4" data-placeholder="Pilih kepala dusun">
      <?php if (isset($data_penduduk)) : ?>
        <option value="<?= $data_penduduk->id; ?>" selected><?= $data_penduduk->nama_lengkap; ?></option>
      <?php else : ?>
        <option value="" selected disabled>Pilih kepala dusun</option>
        <?php foreach ($penduduk as $p) : ?>
          <option value="<?= $p->id; ?>"><?= $p->nama_lengkap; ?></option>
        <?php endforeach; ?>
      <?php endif ?>
    </select>
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Jumlah RW</label>
    <input type="text" name="rw" class="form-control" value="<?= old('rw') ?? $data->rw; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Jumlah RT</label>
    <input type="text" name="rt" class="form-control" value="<?= old('rt') ?? $data->rt; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Jumlah laki-laki</label>
    <input type="text" name="laki_laki" class="form-control" value="<?= old('laki_laki') ?? $data->laki_laki; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Jumlah Perempuan</label>
    <input type="text" name="perempuan" class="form-control" value="<?= old('perempuan') ?? $data->perempuan; ?>" />
  </div>
</div>