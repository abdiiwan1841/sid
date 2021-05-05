<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <?= $this->include('layout/subheader'); ?>
  <!--end::Subheader-->
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Card-->
      <div class="card card-custom">
        <div class="card-header">
          <div class="card-title">
            <span class="card-icon">
              <i class="flaticon2-favourite text-primary"></i>
            </span>
            <h3 class="card-label">Form Tambah Penduduk</h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="/kependudukan/<?= $penduduk->id; ?>" method="POST" autocomplete="off">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $penduduk->id; ?>">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6 col-lg-4">
                <label>Nama lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap penduduk" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $penduduk->nama_lengkap; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Keluarga dari :</label>
                <select class="form-control" name="keluarga_id">
                  <option value="" selected disabled>Pilih keluarga</option>
                  <?php foreach ($keluarga as $k) : ?>
                    <option value="<?= $k->id; ?>"><?= $k->nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>No. NIK</label>
                <input type="text" name="no_nik" class="form-control" placeholder="Nomor NIK" value="<?= (old('no_nik')) ? old('no_nik') : $penduduk->no_nik; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Hubungan keluarga</label>
                <input type="text" name="hubungan_keluarga" class="form-control" placeholder="Nomor KK" value="<?= (old('hubungan_keluarga')) ? old('hubungan_keluarga') : $penduduk->hubungan_keluarga; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama ayah" value="<?= (old('nama_ayah')) ? old('nama_ayah') : $penduduk->nama_ayah; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama ibu" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $penduduk->nama_ibu; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Tempat lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="eq: Medan" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $penduduk->tempat_lahir; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Tanggal lahir</label>
                <div class="input-group date">
                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $penduduk->tanggal_lahir; ?>" />
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="la la-calendar"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Jenis Kelamin :</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="perempuan">Perempuan</option>
                  <option value="Laki-laki" <?= ($penduduk->jenis_kelamin == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= (old('agama')) ? old('agama') : $penduduk->agama; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan dalam KK" value="<?= (old('pendidikan')) ? old('pendidikan') : $penduduk->pendidikan; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Kawin :</label>
                <select class="form-control" name="kawin">
                  <option value="<?= $penduduk->kawin; ?>" selected><?= $penduduk->kawin; ?></option>
                  <option value="Kawin">Kawin</option>
                  <option value="Belum Kawin">Belum Kawin</option>
                  <option value="Cerai Hidup">Cerai Hidup</option>
                  <option value="Cerai Mati">Cerai Mati</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control" placeholder="Umur (angka saja)" value="<?= (old('umur')) ? old('umur') : $penduduk->umur; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat sekarang" value="<?= (old('alamat')) ? old('alamat') : $penduduk->alamat; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Dusun</label>
                <input type="text" name="dusun" class="form-control" placeholder="Dusun" value="<?= (old('dusun')) ? old('dusun') : $penduduk->dusun; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RW</label>
                <input type="text" name="rw" class="form-control" placeholder="RW" value="<?= (old('rw')) ? old('rw') : $penduduk->rw; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RT</label>
                <input type="text" name="rt" class="form-control" placeholder="RT" value="<?= (old('rt')) ? old('rt') : $penduduk->rt; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?= (old('pekerjaan')) ? old('pekerjaan') : $penduduk->pekerjaan; ?>" />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary font-weight-bold mr-2">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Card-->
<!--end::Container-->
<!--end::Entry-->
<?= $this->endSection(); ?>