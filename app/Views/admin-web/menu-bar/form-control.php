<div class="form-group row justify-content-md-center">
  <div class="col-12 d-flex justify-content-center">
    <div class="image-input image-input-outline mb-3" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url('/img/menu-bar/<?= $menu_bar->foto ?>')"></div>

      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Ganti foto">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="foto" accept=".png, .jpg, .jpeg, .svg" />
      </label>

      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Hapus foto">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
      <p class="mt-3 text-center">Foto <span class="text-muted">(Wajib)</span></p>
    </div>
  </div>
  <div class="col-md-12 col-lg-8 mt-3 mt-md-0">
    <label>Nama menu</label>
    <input type="text" name="nama" class="form-control mb-3" value="<?= old('nama') ?? $menu_bar->nama; ?>" />
    <label>URL</label>
    <input type="text" name="url" class="form-control mb-3" placeholder="cth: lapak-online" value="<?= old('url') ?? $menu_bar->url; ?>">
    <div class="checkbox-list">
      <label class="checkbox">
        <input type="checkbox" name="is_active" value="1" <?= ($menu_bar->is_active == 1) ? 'checked' : ''; ?>> <span></span>
        Aktif
      </label>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 justify-content-center d-flex">
    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Simpan</button>
  </div>
</div>