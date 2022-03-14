@extends('layouts.default', ['page' => 'blank', 'page' => 'profile'])
@push('title', 'Profile')

@push('body')
<div class="d-flex flex-row">
  @include('pages.backend.system.profile.sidebar')

  <div class="flex-row-fluid ml-lg-8">
    <div class="card card-custom">

      <form class="form">
        <div class="card-body pt-4">
          <hr>
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