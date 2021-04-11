<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getBlog(){
        $blogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(5);

        $latest = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);

         return view('frontend/blog')
             ->with('blogs',$blogs)
             ->with('latest', $latest);

    }

    public function getDetail($id){
        $blog = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->where('blogs.id', $id)
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->first();

        $latest = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);


        return view('frontend.blog-detail')
            ->with('blog', $blog)
            ->with('latest', $latest);

    }

}
