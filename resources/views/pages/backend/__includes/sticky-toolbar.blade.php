<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
  <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
    <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
      <i class="flaticon2-drop"></i>
    </a>
  </li>
  <li class="nav-item mb-2" data-toggle="tooltip" title="Whatsapp" data-placement="left">
    <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="https://wa.me/{{ env('CONTACT_PHONE') }}/" target="_blank">
      <i class="fab fa-whatsapp"></i>
    </a>
  </li>
  <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
    <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="/dashboard/documentation" target="_blank">
      <i class="fas fa-book-open"></i>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" title="Application Version {{ env('APP_VERSION') }}" data-placement="left">
    <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger">
      <i class="fas fa-info-circle"></i>
    </a>
  </li>
</ul>

<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0"> BOARD PANEL </h4>
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <div class="offcanvas-content">
    TEST
    <div class="offcanvas-footer">
      <a href="#" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase"> Submit </a>
    </div>
  </div>
</div>
