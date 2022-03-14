<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class DashboardController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    return view('pages.backend.system.dashboard.index');
  }

  public function documentation() {
    return view('pages.backend.system.documentation.index');
  }

  public function file_manager() {
    return view('pages.backend.system.file-manager.index');
  }

  public function message() {
    return view('pages.backend.system.message.index');
  }

  public function profile_change_password() {
    return view('pages.backend.system.profile.change-password');
  }

  public function profile_account_information(Request $request) {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.account-information', compact('data'));
  }

  public function profile_update_account_information(Request $request, $id) {
    $data = User::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect('/dashboard/profile/account-information')->with('success', trans('default.notification.success.profile-updated'));
  }

  public function profile_timeline() {
    return view('pages.backend.system.profile.timeline');
  }

  public function profile_update_password(Request $request) {
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
    }

    if(!(strcmp($request->get('new-password'), $request->get('confirm-password'))) == 0){
      return redirect()->back()->with("error", "New Password should be same as your confirmed password. Please retype new password.");
    }

    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with('success', trans('default.notification.success.password-changed'));
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

  /**
  **************************************************
  * @return Language-Switcher
  **************************************************
  **/

  public function language($language = '') {
    request()->session()->put('locale', $language);
    return redirect()->back();
  }

  public function template() {
    return view('layouts.default');
  }

}
