<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\User;
use App\Portfolio;
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
        ->with('slideCats',Category::get())
        ->with('recentPosts',Post::with('category')->take(8)->get())
        ->with('popularPost',Post::with('category')->skip(10)->take(10)->get());
    }
    public function about()
    {
        $portfolios=Portfolio::take(6)->get();
        return view('frontend.pages.about')
        ->with('recentPosts',Post::with('category')->take(8)->get())
        ->with('slideCats',Category::get())
        ->with('portfolios',$portfolios);;
    }
    public function single($id)
    {
        $post=Post::findOrFail($id);
        return view('frontend.pages.single')
        ->with('slideCats',Category::get())
        ->with('recentPosts',Post::with('category')->take(8)->get())
        ->with('relatedPosts',Post::inRandomOrder()->take(1)->get())
        ->with('post',$post);
    }
    public function category($id)
    {
        $category=Category::findOrFail($id);
        return view('frontend.pages.category')
        ->with('slideCats',Category::get())
        ->with('recentPosts',Post::with('category')->take(8)->get())
        ->with('category',$category);
    }
}
