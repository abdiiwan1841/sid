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
          <form class="form" id="kt_form_2" action="<?= route_to('data_terpadu_putus_sekolah_create'); ?>" method="POST" autocomplete="off">
            <?= csrf_field(); ?>
            <?= $this->include('data-terpadu/putus-sekolah/form-control'); ?>
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