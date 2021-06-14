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
            <h3 class="card-label">Data Dusun Desa</h3>
          </div>
          <div class="card-toolbar">
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="la la-upload"></i>Import</button>
              <!--begin::Dropdown Menu-->
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <ul class="nav flex-column nav-hover">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon la la-file-excel-o"></i>
                      <span class="nav-text">Excel</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="la la-download"></i>Export</button>
              <!--begin::Dropdown Menu-->
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <ul class="nav flex-column nav-hover">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon la la-file-pdf-o"></i>
                      <span class="nav-text">PDF</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
            <!--begin::Button-->
            <a href="<?= route_to('pemerintahan_inventaris_desa_new'); ?>" class="btn btn-primary font-weight-bolder mt-2 mt-md-0">
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
              <tr class="text-center">
                <th>No</th>
                <th>Aksi</th>
                <th>Jenis Barang</th>
                <th>Kode Barang</th>
                <th>Identitas Barang</th>
                <th>Asal Usul Barang</th>
                <th>Tanggal Perolehan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($inventaris_desa as $data) : ?>
                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-icon btn-clean" title="Ubah" href="<?= route_to('pemerintahan_inventaris_desa_edit', $data->id); ?>">
                        <i class="far fa-edit fa-sm"></i>
                      </a>
                      <form action="<?= route_to('pemerintahan_inventaris_desa_delete', $data->id); ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field(); ?>
                        <button type="submit" title="Hapus" onclick="return confirm('yakin dihapus?')" class="btn btn-sm btn-icon btn-clean">
                          <i class="far fa-trash fa-sm"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                  <td><?= esc($data->jenis_barang); ?></td>
                  <td><?= esc($data->kode_barang); ?></td>
                  <td><?= esc($data->identitas_barang); ?></td>
                  <td><?= esc($data->asal_barang); ?></td>
                  <td><?= esc($data->tanggal_perolehan) ?></td>
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