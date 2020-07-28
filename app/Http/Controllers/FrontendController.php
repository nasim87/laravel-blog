<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliderPost=Post::with('category')->take(5)->get();
        $posts = Post::with('category')->take(10)->get();
        // dd($posts);
        return view('index')
        ->with('posts',$posts)
        ->with('sliderPost',$sliderPost)
        ->with('popularPost',Post::with('category')->skip(10)->take(10)->get());
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function single($id)
    {
        $post=Post::findOrFail($id);
        return view('frontend.pages.single')
        ->with('relatedPosts',Post::inRandomOrder()->take(1)->get())
        ->with('post',$post);
    }
    public function category($id)
    {
        $category=Category::findOrFail($id);
        return view('frontend.pages.category')
        ->with('category',$category);
    }
}
