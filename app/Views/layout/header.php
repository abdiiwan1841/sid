<div id="kt_header" class="header header-fixed">
  <!--begin::Container-->
  <div class="container-fluid d-flex align-items-stretch justify-content-between">
    <!--begin::Header Menu Wrapper-->
    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
      <!--begin::Header Menu-->
      <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
        <!--begin::Header Nav-->

        <!--end::Header Nav-->
      </div>
      <!--end::Header Menu-->
    </div>
    <!--end::Header Menu Wrapper-->
    <!--begin::Topbar-->
    <div class="topbar">
      <!--begin::User-->
      <div class="topbar-item">
        <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
          <span class="text-muted font-weight-bold font-size-base d-md-inline mr-1">Hi,</span>
          <span class="text-dark-50 font-weight-bolder font-size-base d-md-inline mr-3"><?= user()->username; ?></span>
          <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
            <?php if (in_groups('admin')) : ?>
              <span class="symbol-label font-size-h5 font-weight-bold">A</span>
            <?php elseif (in_groups('supervisor')) : ?>
              <span class="symbol-label font-size-h5 font-weight-bold">S</span>
            <?php else : ?>
              <span class="symbol-label font-size-h5 font-weight-bold">O</span>
            <?php endif; ?>
          </span>
        </div>
      </div>
      <!--end::User-->
    </div>
    <!--end::Topbar-->
  </div>
  <!--end::Container-->
</div>