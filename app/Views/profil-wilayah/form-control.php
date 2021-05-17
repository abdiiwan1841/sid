<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Dusun</label>
    <select class="form-control select2" name="dusun_id" id="kt_select2_4" data-placeholder="Pilih dusun">
      <?php if (isset($data_desa)) : ?>
        <option value="<?= $data_desa->id; ?>" selected><?= $data_desa->dusun; ?></option>
      <?php else : ?>
        <option value="" selected disabled>Pilih dusun</option>
      <?php endif ?>
      <?php foreach ($desa as $desa) : ?>
        <option value="<?= $desa->id; ?>"><?= $desa->dusun; ?></option>
      <?php endforeach; ?>
    </select>
     <small class="text-muted">ingin nambah dusun? <a class="text-primary" href="<?= route_to('profil_wilayah_data_desa_new') ?>">klik disini</a></small> 
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>RW</label>
    <input type="text" name="rw" class="form-control" placeholder="RW" value="<?= old('rw') ?? $data->rw; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-lg-0">
    <label>RT</label>
    <input type="text" name="rt" class="form-control" placeholder="RT" value="<?= old('rt') ?? $data->rt; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Luas</label>
    <input type="text" name="luas" class="form-control" placeholder="cth: 12km" value="<?= old('luas') ?? $data->luas; ?>" />
  </div>
</div>