@extends('layouts.default', ['page' => 'blank', 'page' => 'profile'])
@push('title', 'Profile')

@push('body')
<div class="d-flex flex-row">
  <div class="flex-row-auto offcanvas-mobile w-350px w-xxl-350px" id="kt_profile_aside">
    <div class="card card-custom card-stretch">
      <div class="card-body pt-4">
        <div class="d-flex justify-content-end">
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

        <div class="d-flex align-items-center">
          <div class="symbol symbol-60 symbol-circle symbol-xl-90 mr-5 align-self-start align-self-xxl-center">
            <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
            <i class="symbol-badge symbol-badge-bottom bg-success"></i>
          </div>
          <div>
            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"> {{ Auth::User()->name }} </a>
            <div class="text-muted">Application Developer</div>
            <div class="mt-2">
              <a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a>
              <a href="#" class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a>
            </div>
          </div>
        </div>
        <!--end::User-->
        <!--begin::Contact-->
        <div class="py-9">
          <div class="d-flex align-items-center justify-content-between mb-2">
            <span class="font-weight-bold mr-2">Email:</span>
            <a href="#" class="text-muted text-hover-primary">matt@fifestudios.com</a>
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <span class="font-weight-bold mr-2">Phone:</span>
            <span class="text-muted">44(76)34254578</span>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <span class="font-weight-bold mr-2">Location:</span>
            <span class="text-muted">Melbourne</span>
          </div>
          <hr>
        </div>
        <!--end::Contact-->
        <!--begin::Nav-->

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
          <button type="reset" class="btn btn-success mr-2">Save Changes</button>
          <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
      <form class="form">
        <div class="card-body">

          <table width="100%">
            <tr height="50px">
              <td width="100px"> Username </td>
              <td width="10px"> : </td>
              <td><input type="email" class="form-control form-control-solid" placeholder="Enter email" value="{{ Auth::User()->username }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Email </td>
              <td> : </td>
              <td><input type="email" class="form-control form-control-solid" placeholder="Enter email" value="{{ Auth::User()->email }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Phone </td>
              <td> : </td>
              <td><input type="email" class="form-control form-control-solid" placeholder="Enter email" value="{{ Auth::User()->phone }}" readonly></td>
            </tr>
            <tr height="50px">
              <td> Name </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter email" value="{{ Auth::User()->name }}"></td>
            </tr>
            <tr height="50px">
              <td> Address 1 </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter email"></td>
            </tr>
            <tr height="50px">
              <td> Address 2 </td>
              <td> : </td>
              <td><input type="email" class="form-control" placeholder="Enter email"></td>
            </tr>
          </table>

          <hr>




          </div>
        </form>
        <button type="submit" class="btn btn-success mr-10 ml-10">Save Changes</button>
        <span class="text-right">
          TEST
        </span>
      </div>
    </div>
  </div>
  @endpush

  @push('js')
  <script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
  @endpush
