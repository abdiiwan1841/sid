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
    <label>Jenis Bantuan</label>
    <input type="text" name="jenis_bantuan" class="form-control" placeholder="cth: Beras, Uang" value="<?= old('jenis_bantuan') ?? $bantuan_sosial->jenis_bantuan; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Total bantuan</label>
    <input type="text" name="total" class="form-control" placeholder="cth: 5kg, Rp.1.000.000" value="<?= old('total') ?? $bantuan_sosial->total; ?>">
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Keterangan</label>
    <textarea rows="5" name="keterangan" class="form-control" placeholder="Tulis keterangan (opsional) ..."><?= old('keterangan') ?? $bantuan_sosial->keterangan; ?></textarea>
  </div>
</div>