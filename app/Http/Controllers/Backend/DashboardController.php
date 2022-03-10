<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

  public function profile() {
      return view('pages.backend.system.profile.index');
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
