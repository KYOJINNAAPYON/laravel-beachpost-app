@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4">
       <div class="col-12 mb-4 mt-2">
         <a href="{{ route('posts.create') }}">Create New Post</a>
       </div>
        @foreach ($posts as $post)
        <div class="col-12">
          <div class="row">
          <div class="post">
            <div class="col-12 mb-4 mt-2">
            Title : {{ $post->title }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Place : {{ $post->category_id }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Image : <img src="{{ asset('img/IMG_01.jpg')}}" class="img-thumbnail">
            </div>
            <div class="col-12 mb-4 mt-2">
            Content : {{ $post->content }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Tag : {{ $post->tag }}
            </div>
         
            
             <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
              <a href="{{ route('posts.show',$post->id) }}">Show</a>
              <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
             </form>
            
          </div>
          </div>
        </div>
     @endforeach
     </div>
    </table>
 @endsection