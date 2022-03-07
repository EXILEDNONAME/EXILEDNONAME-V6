<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <div class="d-flex align-items-center flex-wrap mr-1">
      <div class="d-flex align-items-baseline flex-wrap mr-5">
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
          <li class="breadcrumb-item"><a href="/dashboard"><i class="menu-icon fas fa-desktop"></i></a></li>
          <?php $link = "" ?>
          @for($i = 2; $i <= count(Request::segments()); $i++)
          @if($i < count(Request::segments()) & $i > 0)
          <?php $link .= "/" . Request::segment($i); ?>
          <li class="breadcrumb-item"><a href="/dashboard<?= $link ?>"> {{ ucwords(str_replace('-',' ',Request::segment($i)))}} </a></li>
          @else
          <li class="breadcrumb-item"><span class="text-muted"> {{ucwords(str_replace('-',' ',Request::segment($i)))}} </span></li>
          @endif
          @endfor
        </ul>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-light font-weight-bold btn-sm">Actions</a>
    </div>
  </div>
</div>
