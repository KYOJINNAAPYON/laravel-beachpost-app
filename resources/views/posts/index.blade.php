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
         
         <div class="container">
             @if ($tags !== null)
                 <h1>{{ $tags->tag }}の商品一覧{{$total_count}}件</h1>
             @endif
         </div>

        @foreach ($posts as $post)
        <div class="col-12">
          <div class="row">
          
          <div class="post">
            <div class="col-12 m-4 mt-3 w-75">
            Title : {{ $post->title }}
            </div>
            <div class="col-12 m-4 mt-2">
            Place : {{ $post->category_name }}
            </div>
            <div class="col-12 mb-4 mt-2">
              <img src="{{ asset($post->image) }}" width="80%" class="d-block mx-auto">
            </div>
            <div class="row col-12 col-sm-12 justify-content-end">
              <div class="col-9"></div>
              <div class="col-3">{{ $post->created_at }}</div>
            </div>
            <div class="row col-12 col-sm-12 justify-content-end">
              <div class="col-9"></div>
              <div class="col-3">by {{ $post->user_name }}</div>
            </div>
            <div class="col-12 m-5">
            Content : <div class="div-pre w-75">{{ $post->content }}</div>
            </div>
            <div class="col-12 m-5">
            <a href="{{ route('posts.index', ['tag' => $post->tag]) }}">{{ $post->tag }}</a>
            </div>
         
            <div class="row justify-content-between">
              <div class="col-2"></div>
              <div class="col-2">
                @if($post->isFavoritedBy(Auth::user()))
                  <a href="{{ route('posts.favorite', $post->post_id) }}" class="btn text-favorite w-100">Liked! ❤︎</a>
                @else
                  <a href="{{ route('posts.favorite', $post->post_id) }}" class="btn text-favorite w-100">♡</a>
                @endif
              </div>
          </div>
          </div>
        </div>
      </div>
     @endforeach
     </div>
    </table>
 @endsection