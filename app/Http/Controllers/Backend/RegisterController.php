<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('backend.register');
    }

    public function postRegister(RegisterAdminRequest $request){
//        dd($request->all());
        $user = new User();
        $user->name = $request->first_name.' '.$request->last_name;
//        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 1;
        $user->status = 1;
        $user->remember_token = Str::random(10);

        $user->save();

        return redirect('login');
    }
}
