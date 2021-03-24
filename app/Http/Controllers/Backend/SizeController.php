<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSizeRequest;
use App\Http\Requests\EditSizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SizeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSize()
    {
        $data['sizeList'] = Size::paginate(10);
        return view('backend/size/size', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddSize(AddSizeRequest $request){
        $size = new Size;
        $size->size_name = $request->size_name;
        $size->description = $request->description;
        $size->status = $request->status;
        //$size->size_slug = Str::slug($request->cateName);
        $size->save();
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditSize($id)
    {
        $data['size'] = Size::where('id', $id)->first();
        //dd($data);
        //return view('backend/size/edit', $data);
        return View::make('backend/size/edit')->with(['size'=>$data['size']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditSize(EditSizeRequest $request , $id)
    {
        $size = Size::where('id', $id)->first();
        $size->size_name = $request->edit_name;
        $size->description = $request->description;
        $size->status = $request->status;
        $size->save();
        return redirect()->intended('admin/size');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteSize($id){
        Size::destroy($id);
        return back();
    }

//    public function getSearchSize(Request $request){
//        $key = $request->search;
//        $data['sizeList'] = size::where('id', 'like', $key)->orWhere('size_name', 'like', $key)->get();
//        return  $data;
//    }
}
