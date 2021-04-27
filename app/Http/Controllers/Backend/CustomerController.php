<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function getListCustomer()
    {
        $data['adminList'] = DB::table('users')->where('role_id', 2)->paginate(10);
        return view('backend/customer/list', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    /* public function postAddTopic(AddTopicRequest $request){
         $topic = new Topic();
         $topic->topic_name = $request->topic_name;
         $topic->description = $request->description;
         $topic->status = $request->status;
         //$topic->topic_slug = Str::slug($request->cateName);
         $topic->save();
         return back();
     }*/

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditCustomer($id)
    {
        $data['admin'] = DB::table('users')->where('role_id', 2)->where('id', $id)->first();
        return view('backend/customer/edit')->with(['admin'=>$data['admin']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditCustomer(Request $request , $id)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address_admin;
        $gender = $request->gender;
        $birthday = $request->birthday;
        if(!empty($request->password)){
            $password = $request->password;
        }

        $user = DB::table('users')->where('id',$id);

        $user->update([
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'address'=> $address,
            'gender' => $gender,
            'birthday' => $birthday,
            'password' =>  !(empty($request->password)) ? Hash::make($password) : $user->first()->password,
        ]);

        return redirect()->intended('admin/customer_manager');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteCustomer($id){
        DB::table('users')->where('id',$id)->delete();
        return back();
    }
}
