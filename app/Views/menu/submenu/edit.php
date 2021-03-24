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
            <h3 class="card-label">Form Ubah Submenu</h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="menu-management/submenu-management/<?= $submenu->id; ?>" method="POST" autocomplete="off">
            <input type="hidden" name="id" value="<?= $submenu->id; ?>">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Nama submenu" value="<?= (old('title')) ? old('title') : $submenu->title; ?>" />
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <label>Menu :</label>
                <select class="form-control" name="menu_id">
                  <option value="" selected disabled>Pilih Menu</option>
                  <?php foreach ($menu as $m) : ?>
                    <option value="<?= $m->id; ?>" <?= ($submenu->menu_id == $m->id) ? 'selected' : ''; ?>><?= $m->menu; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-6 mt-3">
                <label>URL</label>
                <input type="text" name="url" class="form-control" placeholder="contoh: /menu" value="<?= (old('url')) ? old('url') : $submenu->url; ?>" />
                <div class="form-check form-check-inline d-block mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="is_active" value="1" <?= ($submenu->is_active == 1) ? 'checked' : ''; ?>> Aktif?
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary font-weight-bold mr-2">Ubah</button>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--end::Card-->
<!--end::Container-->
<!--end::Entry-->
<?= $this->endSection(); ?>