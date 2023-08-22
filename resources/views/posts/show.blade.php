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
            Place : {{ $post->category->name }}
            </div>
            <div class="col-12 mb-4 mt-2">
            Image : <img src="{{ asset($post->image)}}" width="80%" class="d-block mx-auto">
            </div>
            <div class="col-12 m-5">
            Content : <div class="div-pre">{{ $post->content }}</div>
            </div>
            <div class="col-12 m-5">
            Tag : {{ $post->tag }}
            </div>
          </div>
          </div>
        </div>
        <div>
     <a href="{{ route('posts.index') }}"> Back to Top</a>
 </div>
 
     </div>
     
    </table>

 
 @endsection