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
            <h3 class="card-label">Data Submenu</h3>
          </div>
          <div class="card-toolbar">
            <!--begin::Button-->
            <a href="<?= base_url('menu-management/submenu-management/new'); ?>" class="btn btn-primary font-weight-bolder">
              <i class="la la-plus"></i>Tambah Submenu
            </a>
            <!--end::Button-->
          </div>
        </div>
        <div class="card-body">
          <!--begin: Datatable-->
          <?= $this->include('components/alert'); ?>
          <table class="table table-bordered table-hover table-checkable mt-2" id="datatable">
            <thead>
              <tr style="text-align: center;">
                <th>No</th>
                <th>Menu</th>
                <th>Nama</th>
                <th>URL</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($submenu as $sm) : ?>
                <tr>
                  <td style="text-align: center;"><?= $no++; ?></td>
                  <?php
                  $menuModel = new \App\Models\Menu\Menu();
                  $menu = $menuModel->where('id', $sm->menu_id)->first(); ?>
                  <td><?= esc($menu->menu); ?></td>
                  <td><?= esc($sm->title); ?></td>
                  <td><?= esc($sm->url); ?></td>
                  <td>
                    <?php if ($sm->is_active == 1) : ?>
                      <span class="label label-lg font-weight-bold label-light-success label-inline">
                        Aktif
                      </span>
                    <?php else : ?>
                      <span class="label label-lg font-weight-bold label-light-danger label-inline">
                        Tidak aktif
                      </span>
                    <?php endif ?>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-icon btn-clean" title="Ubah" href="<?= base_url("menu-management/submenu-management/{$sm->id}/edit"); ?>">
                        <i class="far fa-edit fa-sm"></i>
                      </a>
                      <form action="/menu-management/submenu-management/<?= $sm->id; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field(); ?>
                        <button type="submit" title="Hapus" onclick="return confirm('yakin dihapus?')" class="btn btn-sm btn-icon btn-clean">
                          <i class="far fa-trash fa-sm"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!--end: Datatable-->
        </div>
      </div>
      <!--end::Card-->
    </div>
  </div>
  <!--end::Container-->
</div>
<!--end::Entry-->
<?= $this->endSection(); ?>