<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {                           
        $posts = Post::select('posts.id as post_id', 'title','content','tag','image','category_id','posts.created_at', 'posts.updated_at','user_id','categories.id as category_id','categories.name as category_name','users.name as user_name')
                    ->join('categories', 'posts.category_id', '=', 'categories.id')
                    ->join('users', 'posts.user_id', '=', 'users.id')
                    ->sortable()->latest()->get();
        // $post_image = Storage::get('orange.png');
        $categories = Category::all();
 
        // dd($posts);
        return view('posts.index', compact('posts', 'categories'));
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
  
        return view('posts.create', compact('categories', 'users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->tag = $request->input('tag');
        $post->category_id = $request->input('category_id');
        $post->user_id = Auth::id();
        

        // dd($request->file('file'));
        $file_name = $request->file('image')->getClientOriginalName();
        $post->image = $request->file('image')->storeAs('public',$file_name);
        $post->save();
        return to_route('posts.index')->with('flash_message', '投稿が完了しました。'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
         return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
  
        return view('posts.edit', compact('post', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->tag = $request->input('tag');
        $post->category_id = $request->input('category_id');
        $post->update();
 
         return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
  
        return to_route('posts.index');
    }

    public function favorite(Post $post)
    {
        Auth::user()->togglefavorite($post);
 
        return back();
    }

    public function myposts(Post $post)
    {
        $my_posts = Post::where('user_id','=', Auth::user()->id)
                    ->select('posts.id as post_id', 'title','content','tag','image','category_id','user_id','categories.id as category_id','categories.name as category_name','posts.created_at', 'posts.updated_at')
                    ->join('categories', 'posts.category_id', '=', 'categories.id')
                    ->sortable()->latest()->get();
 
        return view('users.mypost', compact('my_posts'));
    }
}
