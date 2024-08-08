<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoginRequest;
use Illuminate\View\View;

class LoginController extends Controller
{
	public function show_login_view(): View
	{
		return view('admin.auth.login');
	}

	public function login(LoginRequest $request)
	{
		if (auth()->guard('admin')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')]))
			return redirect()->route('admin.dashboard');
		else
			return redirect()->route('admin.showLogin')->with(['error' => 'عفوا بيانات تسجيل الدخول غير صحيحة !!']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect()->route('admin.showLogin');
	}
}
/*
function make_new_admin(){
$admin=new App\Models\Admin();
$admin->name='admin';
$admin->email='test@gmail.com';
$admin->username='admin';
$admin->password=bcrypt("admin");
$admin->com_code=1;
$admin->save();
}
*/
