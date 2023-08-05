@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4">
       <div class="col-12 mb-4 mt-2">
         <a href="{{ route('posts.create') }}">Create New Post</a>
       </div>
       <div>
             Sort By
             @sortablelink('created_at', 'Created_at')
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
            <div class="row justify-content-between">
              <div class="col-2"></div>
              <div class="col-2">{{ $post->created_at }}</div>
            </div>
            <div class="col-12 mb-4 mt-2">
            Content : {{ $post->content }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Tag : {{ $post->tag }}
            </div>
         
            <div class="row justify-content-between">
              <div class="col-2">
              <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                  <a href="{{ route('posts.show',$post->id) }}">Show</a>
                  <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
                </form>
              </div>
              <div class="col-2">
                @if($post->isFavoritedBy(Auth::user()))
                  <a href="{{ route('posts.favorite', $post) }}" class="btn text-favorite w-100">Liked! ❤︎</a>
                @else
                  <a href="{{ route('posts.favorite', $post) }}" class="btn text-favorite w-100">♡</a>
                @endif
              </div>
          </div>
          </div>
        </div>
     @endforeach
     </div>
    </table>
 @endsection