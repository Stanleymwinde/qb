<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $blogs = Blog::latest()->paginate(3);
        return view('user.index', compact('blogs', 'categories'));
    }

    public function about()
    {
        $categories = Category::all();
        $blogs = Blog::latest()->paginate(3);
        return view('user.about', compact('blogs', 'categories'));
    }
    public function services()
    {
        return view('user.service');
    }
    public function projects()
    {
        $projects = config('projects');
        return view('user.project', compact('projects'));
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function singleproject($id)
    {
        // $projects = config('projects');
        $projects = collect(config('projects'))->firstWhere('id', $id);
        // $offers = collect(config('offer'))->firstWhere('id', $id);
        return view('user.single-project', compact('projects'));
    }
    public function blog()
    {
        $categories = Category::all();
        $blogs = Blog::latest()->paginate(3);
        return view('user.blog', compact('blogs', 'categories'));
    }
    // public function singleblog($blog = null)
    // {
    //     $category = Category::all();
    //     $blog = Blog::where('slug', $blog)->firstOrFail();
    //     $blogsData = Blog::latest()->take(5)->get();
    //     return view('user.single-blog', compact('blog', 'category', 'blogsData'));
    // }

    public function singleblog($slug)
    {
        $category = Category::all();
        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            abort(404); // blog post not found
        }

        $blogsData = Blog::latest()->take(5)->get();

        return view('user.single-blog', compact('blog', 'category', 'blogsData'));
    }

    public function quote()
    {
        return view('user.quote');
    }
}
