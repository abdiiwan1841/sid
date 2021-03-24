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
            <h3 class="card-label">Form Tambah Keluarga</h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="<?= route_to('keluarga_create'); ?>" method="POST" autocomplete="off">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>No. KK</label>
                <input type="text" name="no_kk" class="form-control" placeholder="Nomor KK" value="<?= old('no_kk'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?= old('kecamatan'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="<?= old('kabupaten'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Provinsi</label>
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?= old('provinsi'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= old('alamat'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Kode Pos</label>
                <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?= old('kode_pos'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RW</label>
                <input type="text" name="rw" class="form-control" placeholder="RW" value="<?= old('rw'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RT</label>
                <input type="text" name="rt" class="form-control" placeholder="RT" value="<?= old('rt'); ?>" />
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