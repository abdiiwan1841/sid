<div class="form-group row">
  <div class="col-12 d-flex justify-content-center">
    <div class="image-input image-input-outline mb-3" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url('/img/penduduk/<?= $penduduk->foto ?? 'default.jpg' ?>')"></div>

      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
      </label>

      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
      <p class="mt-3 text-center">Foto Penduduk</p>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <label>Nama lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap penduduk" value="<?= old('nama_lengkap') ?? $penduduk->nama_lengkap; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>Keluarga dari :</label>
    <select class="form-control select2" name="keluarga_id" id="kt_select2_4" data-placeholder="Pilih No KK">
      <?php if (isset($penduduk_keluarga)) : ?>
        <option value="<?= $penduduk_keluarga->id; ?>" selected><?= $penduduk_keluarga->no_kk; ?></option>
      <?php else : ?>
        <option value="" selected disabled>Pilih No KK</option>
      <?php endif; ?>
      <?php foreach ($keluarga as $k) : ?>
        <option value="<?= $k->id; ?>"><?= $k->no_kk; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
    <label>No. NIK</label>
    <input type="text" name="no_nik" class="form-control" placeholder="Nomor NIK" value="<?= old('no_nik') ?? $penduduk->no_nik; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Hubungan keluarga</label>
    <input type="text" name="hubungan_keluarga" class="form-control" placeholder="cth: Anak, Kepala Keluarga, Istri, dll" value="<?= old('hubungan_keluarga') ?? $penduduk->hubungan_keluarga; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Nama Ayah</label>
    <input type="text" name="nama_ayah" class="form-control" placeholder="Nama ayah" value="<?= old('nama_ayah') ?? $penduduk->nama_ayah; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Nama Ibu</label>
    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama ibu" value="<?= old('nama_ibu') ?? $penduduk->nama_ibu; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Tempat lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" placeholder="cth: Medan" value="<?= old('tempat_lahir') ?? $penduduk->tempat_lahir; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Tanggal lahir</label>
    <div class="input-group date">
      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?? $penduduk->tanggal_lahir; ?>" />
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-calendar"></i>
        </span>
      </div>
    </div>
    <small class="text-muted">bulan/tanggal/tahun</small>
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Jenis Kelamin :</label>
    <select class="form-control" name="jenis_kelamin">
      <option value="perempuan">Perempuan</option>
      <option value="Laki-laki" <?= ($penduduk->jenis_kelamin == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
      <?= $penduduk->jenis_kelamin ?? '
        <option value="" selected disabled>Pilih Jenis Kelamin</option>
      ' ?>
    </select>
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Agama</label>
    <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= old('agama') ?? $penduduk->agama; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pendidikan</label>
    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan dalam KK" value="<?= old('pendidikan') ?? $penduduk->pendidikan; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Status kawin :</label>
    <select class="form-control" name="kawin">
      <option value="<?= $penduduk->kawin; ?>" selected><?= $penduduk->kawin ?? 'Pilih Status'; ?></option>
      <option value="Kawin">Kawin</option>
      <option value="Belum Kawin">Belum Kawin</option>
      <option value="Cerai Hidup">Cerai Hidup</option>
      <option value="Cerai Mati">Cerai Mati</option>
    </select>
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Umur</label>
    <input type="text" name="umur" class="form-control" placeholder="Umur (angka saja)" value="<?= old('umur') ?? $penduduk->umur; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat sekarang" value="<?= old('alamat') ?? $penduduk->alamat; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Dusun</label>
    <input type="text" name="dusun" class="form-control" placeholder="Dusun" value="<?= old('dusun') ?? $penduduk->dusun; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>RW</label>
    <input type="text" name="rw" class="form-control" placeholder="RW" value="<?= old('rw') ?? $penduduk->rw; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>RT</label>
    <input type="text" name="rt" class="form-control" placeholder="RT" value="<?= old('rt') ?? $penduduk->rt; ?>" />
  </div>
  <div class="col-md-6 col-lg-4 mt-3">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?= old('pekerjaan') ?? $penduduk->pekerjaan; ?>" />
  </div>
</div>