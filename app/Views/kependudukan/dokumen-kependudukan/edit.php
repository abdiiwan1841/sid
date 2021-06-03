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
            <h3 class="card-label">Ubah Data : <?= $data_penduduk->nama_lengkap ?></h3>
          </div>
        </div>

        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="<?= route_to("kependudukan_dokumen_kependudukan_update", $dokumen_kependudukan->id); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" value="PUT" name="_method">
            <input type="hidden" value="<?= $dokumen_kependudukan->id; ?>" name="id">
            <?= csrf_field(); ?>
            <?= $this->include('kependudukan/dokumen-kependudukan/form-control'); ?>
            <div class="row justify-content-center">
              <div class="col-lg-12 d-flex justify-content-center">
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