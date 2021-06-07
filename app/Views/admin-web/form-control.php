<div class="form-group row justify-content-md-center">
  <div class="col-12 d-flex justify-content-center">
    <div class="image-input image-input-outline mb-3" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url('/img/artikel/<?= $artikel->thumbnail ?>')"></div>

      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />
      </label>

      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
      <p class="mt-3 text-center">Thumbnail <span class="text-muted">(Opsional)</span></p>
    </div>
  </div>
  <div class="col-md-12 col-lg-8 mt-3 mt-md-0">
    <label>Judul artikel</label>
    <input type="text" name="judul" class="form-control mb-3" value="<?= old('judul') ?? $artikel->judul; ?>" />
    <label>Text artikel</label>
    <textarea rows="3" name="text" class="form-control summernote" id="kt_summernote_1" placeholder="Text"><?= old('text') ?? $artikel->text; ?></textarea>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 justify-content-center d-flex">
    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Simpan</button>
  </div>
</div>