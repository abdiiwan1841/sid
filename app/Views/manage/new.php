<?= $this->extend('manage/template'); ?>

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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Manage User</h5>
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
                        <h3 class="card-label">New Record</h3>
                    </div>
                </div>
                <div class="card-body">
                    <?= $validation->listErrors(); ?>
                    <form class="form" id="kt_form_2" action="/manage/savegroups/<?= $u['id']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $u['id']; ?>"">
                        <div class=" mb-3">
                        <div class="mb-2">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>* Users</label>
                                    <input type="hidden" name="user_id" class="form-control" placeholder="" value="<?= $u['id']; ?>" />
                                    <input type="text" name="" class="form-control" placeholder="" value="<?= $u['username']; ?>" />
                                </div>
                                <div class="col-lg-6">
                                    <label>* Role:</label>
                                    <select class="form-control" name="group_id">
                                        <option value="">Select</option>
                                        <?php foreach ($groups as $g) : ?>
                                            <option value="<?= $g->id; ?>"><?= $g->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary font-weight-bold mr-2">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<?= $this->endSection(); ?>