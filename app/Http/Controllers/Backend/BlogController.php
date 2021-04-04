<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlog()
    {
        $blogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*'
            )
            ->paginate(5);

        return view('backend.blog.list')->with('blogs',$blogs)->with('i', $i=1);

    }

    public function getAddBlog(){
        $categories = BlogCategory::all();

        return view('backend.blog.add')
            ->with('categories', $categories)
            ;
    }

    public function postAddBlog(AddBlogRequest $request){

        $filename = $request->blog_thumbnail->getClientOriginalName(); //get filename

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->thumbnail = $filename;
        $blog->content = $request->blog_content;
        $blog->blog_category_id = $request->blog_category;
        $blog->status =  $request->status;

        $blog->save();

        $file = $request->blog_thumbnail;
        $file->move('storage/blog_thumbnail', $file->getClientOriginalName());

        return redirect('admin/blog');

    }




    public function getEditBlog($id){
        $blog = Blog::where('id',$id)->first();
        $categories= BlogCategory::all();

        //dd($sizeChoosed ) ;
        return view('backend.blog.edit')
            ->with('blog', $blog)
            ->with('categories', $categories);
    }


    public function postEditBlog($id, EditBlogRequest $request){
        $blog = Blog::where('id', $id)->first();

        $blog->title = $request->title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->content = $request->blog_content;
        $blog->blog_category_id = $request->blog_category;
        $blog->status =  $request->status;

        if($request->hasFile('blog_thumbnail')){
            $img = $request->blog_thumbnail->getClientOriginalName();
            $blog->thumbnail = $img;

            $file = $request->blog_thumbnail;
            $file->move('storage/blog_thumbnail', $file->getClientOriginalName());
        }
        $blog->save();

        return redirect('admin/blog');
    }

    public function getDeleteBlog($id){
        Blog::destroy($id);
        return back();
    }


}
