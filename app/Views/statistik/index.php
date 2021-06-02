<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Info-->
      <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?= $title; ?></h5>
        <!--end::Page Title-->
      </div>
      <!--end::Info-->
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
          <div class="card-header">
            <div class="card-title">
              <h3 class="card-label">Column Chart</h3>
            </div>
          </div>
          <div class="card-body">
            <!--begin::Chart-->
            <script>
              const URL_JSON_CHART = '<?= base_url(); ?>/statistik/new';
            </script>
            <div id="chart"></div>
            <!--end::Chart-->
          </div>
        </div>
        <!--end::Card-->
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>