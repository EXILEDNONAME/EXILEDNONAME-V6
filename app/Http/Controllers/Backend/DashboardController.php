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

  public function file_manager() {
      return view('pages.backend.system.file-manager.index');
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
