<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Info-->
      <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Page Heading-->
        <div class="d-flex align-items-baseline flex-wrap mr-5">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold my-1 mr-5">Tambah Menu</h5>
          <!--end::Page Title-->
          <!--begin::Breadcrumb-->
          <!-- <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item text-muted">
              <a href="" class="text-muted">Supervisor</a>
            </li>
          </ul> -->
          <!--end::Breadcrumb-->
        </div>
        <!--end::Page Heading-->
      </div>
      <!--end::Info-->
      <!--begin::Toolbar-->

      <!--end::Toolbar-->
    </div>
  </div>
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
            <h3 class="card-label">Form Tambah Menu</h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="menu-management" method="POST" autocomplete="off">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Menu</label>
                <input type="text" name="menu" class="form-control" placeholder="Nama menu" value="<?= old('menu'); ?>" />
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <label>Icon </label>
                <input type="text" name="icon" class="form-control" placeholder="default: fa-th-large" value="<?= old('icon'); ?>" />
                <small class="form-text text-muted">
                  lihat icon lainnya di <a href="https://fontawesome.com/icons">fontawesome.com</a>
                </small>
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <div class="form-group row">
                  <label class="col-form-label col-12">Izin Akses</label>
                  <div class="col-12">
                    <select class="form-control select2" id="kt_select2_3" name="group_id[]" multiple="multiple" data-placeholder="Siapa yang bisa akses menu ini?">
                      <?php foreach ($group as $g) : ?>
                        <option value="<?= $g->id; ?>"><?= $g->name; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary font-weight-bold mr-2">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Container-->
  <!--end::Entry-->
</div>
<?= $this->endSection(); ?>