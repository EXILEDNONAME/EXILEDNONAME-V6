@extends('layouts.default', ['page' => 'blank', 'page' => 'profile'])
@push('title', 'Profile')

@push('body')
<div class="d-flex flex-row">
  <div class="flex-row-auto offcanvas-mobile w-300px w-xxl-300px" id="kt_profile_aside">
    <div class="card card-custom card-stretch">
      <div class="card-body pt-4">
        <hr>
        <div class="d-flex align-items-center">
          <div class="symbol symbol-60 symbol-circle symbol-xl-50 mr-5 align-self-start align-self-xxl-center">
            <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
            <i class="symbol-badge symbol-badge-bottom bg-success"></i>
          </div>
          <div>
            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"> {{ Auth::User()->name }} </a>
            <div class="text-muted">Application Developer</div>

          </div>
        </div>

        <hr>

        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
          <div class="navi-item mb-1">
            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4">
              <span class="navi-text font-size-lg text-center"> Timeline </span>
            </a>
          </div>
          <div class="navi-item mb-1">
            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4 active">
              <span class="navi-text font-size-lg text-center"> Account Information </span>
            </a>
          </div>
          <div class="navi-item">
            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4">
              <span class="navi-text font-size-lg text-center"> Change Password </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="flex-row-fluid ml-lg-8">
    <div class="card card-custom">
      <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
          <h3 class="card-label font-weight-bolder text-dark">Account Information</h3>
          <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
        </div>
        <div class="card-toolbar">
          <div class="dropdown dropdown-inline">
            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ki ki-bold-more-hor"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <ul class="navi navi-hover py-5">
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-icon">
                      <i class="flaticon2-drop"></i>
                    </span>
                    <span class="navi-text">New Group</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <form class="form">
        <div class="card-body">
          <table width="100%">
            <tr height="50px">
              <td width="100px"> Photo </td>
              <td width="10px"></td>
              <td>
                <div class="image-input image-input-outline image-input-circle" id="kt_user_avatar" style="background-image: url(/assets/backend/media/users/blank.png)">
                  <div class="image-input-wrapper" style="background-image: url(/assets/backend/media/svg/avatars/007-boy-2.svg)"></div>
                  <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="profile_avatar_remove" />
                  </label>
                  <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                  </span>
                  <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                  </span>
                </div>
              </td>
            </tr>
            <tr height="50px">
              <td width="100px"> Username </td>
              <td width="10px"> : </td>
              <td><input type="email" class="form-control form-control-solid" value="{{ Auth::User()->username }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Email </td>
              <td> : </td>
              <td><input type="email" class="form-control form-control-solid" value="{{ Auth::User()->email }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Phone </td>
              <td> : </td>
              <td><input type="email" class="form-control form-control-solid" value="{{ Auth::User()->phone }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Name </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter Name" value="{{ Auth::User()->name }}"></td>
            </tr>
            <tr height="50px">
              <td> Address 1 </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter Address 1"></td>
            </tr>
            <tr height="50px">
              <td> Address 2 </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter Address 2"></td>
            </tr>
          </table>
          <hr>
        </div>
      </form>
      <button type="submit" class="btn btn-success mr-10 ml-10 mb-10">Save Changes</button>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/custom/education/student/profile.js?v=7.0.5"></script>
@endpush
