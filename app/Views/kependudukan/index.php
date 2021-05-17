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
            <h3 class="card-label">Data Penduduk</h3>
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
            <a href="<?= base_url('kependudukan/new'); ?>" class="btn btn-primary font-weight-bolder mt-2 mt-md-0">
              <i class="la la-plus"></i>Tambah Penduduk
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
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Dusun</th>
                <th>Pendidikan Dalam KK</th>
                <th>Kawin</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>RW</th>
                <th>RT</th>
                <th>Agama</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan</th>
                <th>Tempat Lahir</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($penduduk as $p) : ?>
                <tr>
                  <td style="text-align: center;"><?= $no++; ?></td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-icon btn-clean" title="Ubah" href="<?= base_url("kependudukan/{$p->id}/edit"); ?>">
                        <i class="far fa-edit fa-sm"></i>
                      </a>
                      <form action="/kependudukan/<?= $p->id; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field(); ?>
                        <button type="submit" title="Hapus" onclick="return confirm('yakin dihapus?')" class="btn btn-sm btn-icon btn-clean">
                          <i class="far fa-trash fa-sm"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                  <td><img src="/img/penduduk/<?= esc($p->foto); ?>" alt="<?= esc($p->foto); ?>" class="rounded" width="60" height="60"></td>
                  <td><?= esc($p->nama_lengkap); ?></td>
                  <td><?= esc($p->no_nik); ?></td>
                  <td><?= ttl($p->tanggal_lahir); ?></td>
                  <td><?= esc($p->umur); ?> tahun</td>
                  <td><?= esc($p->dusun); ?></td>
                  <td><?= esc($p->pendidikan); ?></td>
                  <td><?= esc($p->kawin); ?></td>
                  <td><?= esc($p->alamat); ?></td>
                  <td><?= esc($p->jenis_kelamin); ?></td>
                  <td><?= esc($p->rw); ?></td>
                  <td><?= esc($p->rt); ?></td>
                  <td><?= esc($p->agama); ?></td>
                  <td><?= esc($p->nama_ayah); ?></td>
                  <td><?= esc($p->nama_ibu); ?></td>
                  <td><?= esc($p->pekerjaan); ?></td>
                  <td><?= esc($p->tempat_lahir); ?></td>
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