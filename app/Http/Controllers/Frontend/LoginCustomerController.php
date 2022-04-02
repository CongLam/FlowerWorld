<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{
    public function getLogin()
    {
        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1,
            'role_id' => [2]
        ];

        if (!empty($request->rememberPasswordCheck)) {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::attempt($arr, $remember)) {
            return redirect()->guest(route('/'));
        } else {
            return back()->withInput()->with('error', 'Email hoặc mật khẩu của bạn không chính xác!');
        }

    }

    public function getLogout()
    {
        Auth::logout();

        if (Auth::guest()) {
            return redirect()->guest('/');
        }
    }
}
