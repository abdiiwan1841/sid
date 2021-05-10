<div class="form-group row">
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Dusun</label>
    <input type="text" name="dusun" class="form-control" placeholder="Nama Dusun" value="<?= old('dusun') ?? $data->dusun; ?>" />
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