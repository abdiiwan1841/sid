<?= $this->extend('auth/index'); ?>

<?= $this->section('content'); ?>
<div class="login-form login-signin">
    <!--begin::Form-->
    <?= view('Myth\Auth\Views\_message_block') ?>
    <form class="form" action="<?= route_to('login') ?>" method="post">
        <?= csrf_field() ?>
        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to SID</h3>
        </div>
        <!--begin::Title-->
        <!--begin::Form group-->
        <?php if ($config->validFields === ['email']) : ?>
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark"><?= lang('Auth.email') ?></label>
                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg" type="email" name="login" autocomplete="off" />
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php else : ?>
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark"><?= lang('Auth.emailOrUsername') ?></label>
                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="login" autocomplete="off" />
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php endif; ?>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5"><?= lang('Auth.password') ?></label>
                <?php if ($config->activeResetter) : ?>
                    <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a>
                <?php endif; ?>
            </div>
            <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
        </div>
        <!--end::Form group-->
        <!--begin::Action-->
        <div class="pb-lg-0 pb-5">
            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"><?= lang('Auth.loginAction') ?></button>
        </div>
        <!--end::Action-->
        <?php if ($config->allowRegistration) : ?>
            <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
        <?php endif; ?>
    </form>
    <!--end::Form-->
</div>
<?= $this->endSection(); ?>