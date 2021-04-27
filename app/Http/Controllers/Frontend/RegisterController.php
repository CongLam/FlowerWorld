<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function getRegisterCustomer(){
        return view('frontend.register');
    }

    public function postRegisterCustomer(RegisterAdminRequest $request){
        $user = new User();
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 2;
        $user->status = 1;
        $user->remember_token = Str::random(10);

        $user->save();

        return redirect('login_customer');
    }

}
