@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4">
    
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
            Content : <pre>{{ $post->content }}</pre>
            </div>
            <div class="col-12 mb-4 mt-2">
            Tag : {{ $post->tag }}
            </div>
          </div>
          </div>
        </div>
        <div>
     <a href="{{ route('posts.index') }}"> Back</a>
 </div>
     </div>
     
    </table>

 
 @endsection