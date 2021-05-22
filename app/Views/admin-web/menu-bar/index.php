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
            <h3 class="card-label">Data <?= $title; ?></h3>
          </div>
          <div class="card-toolbar">
            <!--begin::Button-->
            <a href="<?= route_to('admin_web_menu_bar_new'); ?>" class="btn btn-primary font-weight-bolder mt-2 mt-md-0">
              <i class="la la-plus"></i>Tambah
            </a>
            <!--end::Button-->
          </div>
        </div>
        <div class="card-body">
          <!--begin: Datatable-->
          <?= $this->include('components/alert'); ?>
          <table class="table table-bordered table-hover table-checkable" id="datatable">
            <thead>
              <tr style="text-align: center;">
                <th>No</th>
                <th>Aksi</th>
                <th>Nama menu</th>
                <th>Foto</th>
                <th>URL</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($menu_bar as $data) : ?>
                <tr>
                  <td style="text-align: center;"><?= $no++; ?></td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-icon btn-clean" title="Lihat" href="<?= env('URLFrontEnd') . '/' . $data->url;; ?>">
                        <i class="far fa-eye fa-sm"></i>
                      </a>
                      <a class="btn btn-sm btn-icon btn-clean" title="Ubah" href="<?= route_to('admin_web_menu_bar_edit', $data->id); ?>">
                        <i class="far fa-edit fa-sm"></i>
                      </a>
                      <form action="<?= route_to('admin_web_menu_bar_delete', $data->id); ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field(); ?>
                        <button type="submit" title="Hapus" onclick="return confirm('yakin dihapus?')" class="btn btn-sm btn-icon btn-clean">
                          <i class="far fa-trash fa-sm"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                  <td><?= esc($data->nama); ?></td>
                  <td>
                    <img src="/img/menu-bar/<?= esc($data->foto); ?>" alt="<?= esc($data->foto); ?>" class="rounded img-fluid">
                  </td>
                  <td><?= esc($data->url); ?></td>
                  <td>
                    <?php if ($data->is_active == 1) : ?> <span class="label label-lg font-weight-bold label-light-success label-inline">
                        Aktif
                      </span>
                    <?php else : ?>
                      <span class="label label-lg font-weight-bold label-light-danger label-inline">
                        Tidak aktif
                      </span>
                    <?php endif ?>
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
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
<?= $this->endSection(); ?>