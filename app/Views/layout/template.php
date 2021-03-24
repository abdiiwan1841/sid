<?= $this->extend('layout/index'); ?>
<?= $this->section('template'); ?>
<div class="d-flex flex-row flex-column-fluid page">
    <!--begin::Aside-->
    <?= $this->include('layout/aside'); ?>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <?= $this->include('layout/header'); ?>
        <!--end::Header-->
        <!--begin::Content-->
        <?= $this->renderSection('content'); ?>
        <!--end::Content-->
        <!--begin::Footer-->
        <?= $this->include('layout/footer'); ?>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<?= $this->endSection(); ?>