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
            <h3 class="card-label">Form Tambah Penduduk</h3>
          </div>
        </div>
        <div class="card-body">
          <?= $validation->listErrors(); ?>
          <form class="form" id="kt_form_2" action="/kependudukan/<?= $keluarga->id; ?>" method="POST" autocomplete="off">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $penduduk->id; ?>">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <div class="col-md-6 col-lg-4">
                <label>Nama lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap penduduk" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $penduduk->nama_lengkap; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama ibu" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $penduduk->nama_ibu; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= (old('agama')) ? old('agama') : $penduduk->agama; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RW</label>
                <input type="text" name="rw" class="form-control" placeholder="RW" value="<?= (old('rw')) ? old('rw') : $penduduk->rw; ?>" />
              </div>
              <div class="col-md-6 col-lg-4 mt-3">
                <label>RT</label>
                <input type="text" name="rt" class="form-control" placeholder="RT" value="<?= (old('rt')) ? old('rt') : $penduduk->rt; ?>" />
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