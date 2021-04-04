<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddBlogCategoryRequest;
use App\Http\Requests\EditBlogCategoryRequest;
use App\Models\BlogCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getBlogCategory()
    {
        $data['cateList'] = BlogCategory::paginate(10);
        return view('backend/category/category', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddBlogCategory(AddBlogCategoryRequest $request){
        $category = new BlogCategory();
        $category->blog_category_name = $request->blog_category_name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditBlogCategory($id)
    {
        $data['blogCategory'] = BlogCategory::where('id', $id)->first();

        return View::make('backend/category/edit')->with(['blogCategory'=>$data['blogCategory']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditBlogCategory(EditBlogCategoryRequest $request , $id)
    {
//        dd(1);
        $category = BlogCategory::where('id', $id)->first();
        $category->blog_category_name = $request->blog_category_name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
        return redirect()->intended('admin/blog_category');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteBlogCategory($id){
        BlogCategory::destroy($id);
        return back();
    }
}
