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
            <h3 class="card-label">Form <?= $title; ?></h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="<?= route_to('validas_usia_update', 1); ?>" method="POST" autocomplete="off">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="1">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Form</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Form penduduk" value="<?= old('nama_lengkap'); ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Tanggal lahir</label>
                <div class="input-group date">
                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="kt_datepicker_3" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" />
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="la la-calendar"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mt-3 mt-md-0">
                <label>Jenis Kelamin :</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="" selected disabled>Pilih jenis kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Kawin :</label>
                <select class="form-control" name="kawin">
                  <option value="" selected disabled>Pilih status kawin</option>
                  <option value="Kawin">Kawin</option>
                  <option value="Belum Kawin">Belum Kawin</option>
                  <option value="Cerai Hidup">Cerai Hidup</option>
                  <option value="Cerai Mati">Cerai Mati</option>
                </select>
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