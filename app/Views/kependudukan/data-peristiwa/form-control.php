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
    <label>Tanggal peristiwa</label>
    <div class="input-group date">
      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="tanggal_peristiwa" value="<?= old('tanggal_peristiwa') ?? $data_peristiwa->tanggal_peristiwa; ?>" />
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-calendar"></i>
        </span>
      </div>
    </div>
    <small class="text-muted">bulan/tanggal/tahun</small>
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Keterangan Peristiwa</label>
    <textarea rows="5" name="keterangan_peristiwa" class="form-control" placeholder="Tulis keterangan .."><?= old('keterangan_peristiwa') ?? $data_peristiwa->keterangan_peristiwa; ?></textarea>
  </div>
</div>