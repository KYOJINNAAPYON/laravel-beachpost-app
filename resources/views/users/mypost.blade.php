@extends('layouts.app')
 
 @section('content')
 <table>
     <div class="container mt-4">
         <h2>All Your Posts</h2>

        @foreach ($my_posts as $my_post)

             <div class="col-12">
          <div class="row">
          <div class="post">
            <div class="col-12 mb-4 mt-2">
            Title : {{ $my_post->title }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Place : {{ $my_post->category_id }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Image : <img src="{{ asset('img/IMG_01.jpg')}}" class="img-thumbnail">
            </div>
            <div class="row justify-content-between">
              <div class="col-2"></div>
              <div class="col-2">{{ $my_post->created_at }}</div>
            </div>
            <div class="col-12 mb-4 mt-2">
            Content : {{ $my_post->content }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Tag : {{ $my_post->tag }}
            </div>
         
            <div class="row justify-content-between">
              <div class="col-2">
              <form action="{{ route('posts.destroy',$my_post->id) }}" method="POST">
                  <a href="{{ route('posts.show',$my_post->id) }}">Show</a>
                  <a href="{{ route('posts.edit',$my_post->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
                </form>
              </div>
          </div>
          </div>
        </div>

             @endforeach
     </div>
 </table>
 @endsection
