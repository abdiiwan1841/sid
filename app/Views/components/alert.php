<?php if (session()->getFlashdata('berhasil')) : ?>
  <div class="alert alert-custom alert-success fade show" role="alert">
    <div class="alert-icon"><i class="far fa-check-circle"></i></div>
    <div class="alert-text"><?= session()->getFlashdata('berhasil'); ?></div>
    <div class="alert-close">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="ki ki-close"></i></span>
      </button>
    </div>
  </div>
<?php endif; ?>
<?php if (session()->getFlashdata('gagal')) : ?>
  <div class="alert alert-custom alert-danger fade show" role="alert">
    <div class="alert-icon"><i class="far fa-times-circle fa-fw"></i></div>
    <div class="alert-text"><?= session()->getFlashdata('gagal'); ?></div>
    <div class="alert-close">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="ki ki-close"></i></span>
      </button>
    </div>
  </div>
<?php endif; ?>