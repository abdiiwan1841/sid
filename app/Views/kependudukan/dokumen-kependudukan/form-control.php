<div class="form-group row justify-content-center">
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
    <label>Nomor Akta Kelahiran (opsional)</label>
    <input type="text" name="no_akta" class="form-control" value="<?= old('no_akta') ?? $dokumen_kependudukan->no_akta; ?>" />
  </div>
</div>

<div class="form-group row justify-content-center">
  <div class="col-md-6 col-lg-4 mt-3 d-flex justify-content-center">
    <div class="image-input image-input-outline mb-3" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url('/img/ktp/<?= $dokumen_kependudukan->fotokopi_ktp ?? 'default.jpg' ?>')"></div>

      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="fotokopi_ktp" accept=".png, .jpg, .jpeg" />
      </label>

      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
      <p class="mt-3 text-center">Fotokopi KTP</p>
    </div>
  </div>

  <div class="col-md-6 col-lg-4 mt-3 d-flex justify-content-center">
    <div class="image-input image-input-outline mb-3" id="kt_image_2">
      <div class="image-input-wrapper" style="background-image: url('/img/ijazah/<?= $dokumen_kependudukan->fotokopi_ijazah ?? 'default.jpg' ?>')"></div>

      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="fotokopi_ijazah" accept=".png, .jpg, .jpeg" />
      </label>

      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
      <p class="mt-3 text-center">Fotokopi Ijazah</p>
    </div>
  </div>
</div>