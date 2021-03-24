<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddColorRequest;
use App\Http\Requests\AddTopicRequest;
use App\Http\Requests\EditColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getcolor()
    {
        $data['colorList'] = Color::paginate(10);
        return view('backend/color/color', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddColor(AddColorRequest $request){
        $color = new Color();
        $color->color_name = $request->color_name;
        $color->status = $request->status;
        //$color->color_slug = Str::slug($request->cateName);
        $color->save();
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditColor($id)
    {
        $data['color'] = Color::where('id', $id)->first();
        //dd($data);
        return view('backend/color/edit', $data);
        //return View::make('backend/color/edit')->with(['color'=>$data['color']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditColor(EditColorRequest $request , $id)
    {
        $color = Color::where('id', $id)->first();
        $color->color_name = $request->edit_name;
        $color->status = $request->status;
        $color->save();
        return redirect()->intended('admin/color');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteColor($id){
        Color::destroy($id);
        return back();
    }

//    public function getSearchcolor(Request $request){
//        $key = $request->search;
//        $data['colorList'] = color::where('id', 'like', $key)->orWhere('color_name', 'like', $key)->get();
//        return  $data;
//    }
}
