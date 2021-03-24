<?= $this->extend('auth/index'); ?>

<?= $this->section('content'); ?>
<div class="login-form login-signin">
    <!--begin::Form-->
    <?= view('Myth\Auth\Views\_message_block') ?>
    <form class="form" action="<?= route_to('register') ?>" method="post">
        <?= csrf_field() ?>
        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg"><?= lang('Auth.register') ?></h3>
            <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
        </div>
        <!--end::Title-->
        <!--begin::Form username-->
        <div class="form-group">
            <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="text" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" name="username" autocomplete="off" />
        </div>
        <!--end::Form username-->
        <!--begin::Form email-->
        <div class="form-group">
            <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" placeholder="<?= lang('Auth.email') ?>" name="email" autocomplete="off" value="<?= old('email') ?>" />
        </div>
        <!--end::Form email-->
        <!--begin::Form group-->
        <div class="form-group">
            <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" placeholder="<?= lang('Auth.password') ?>" name="password" autocomplete="off" />
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" placeholder="<?= lang('Auth.repeatPassword') ?>" name="pass_confirm" autocomplete="off" />
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4"><?= lang('Auth.register') ?></button>
        </div>
        <!--end::Form group-->
        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
    </form>
    <!--end::Form-->
</div>
<?= $this->endSection(); ?>