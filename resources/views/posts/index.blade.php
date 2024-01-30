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
            <h1>{{ $tags->tag }}の投稿一覧{{$total_count}}件</h1>
          @endif
       </div>
     </div>

      
    <div class="container mt-4">
      <div class="row">
        @foreach ($posts as $post)
      
        <div class="col-md-2 p-2 post">
            <div>
            Title : {{ $post->title }}
            </div>
            <div>
            Place : {{ $post->category_name }}
            </div>
            <div>
              <a href="{{ route('posts.show',$post->post_id) }}"><img src="{{ asset($post->image) }}" width="90%" class="d-block mx-auto"></a>
            </div>
            <!-- <div>
              <div>{{ $post->created_at }}</div>
            </div> -->
            <div>
              <div class="col-1"></div>
              <div class="col-3">by {{ $post->user_name }}</div>
            </div>
            <div>
            Content : <div>{{ Str::limit( $post->content , 20, '...')}}</div>
            </div>
            <div>
            <a href="{{ route('posts.index', ['tag' => $post->tag]) }}">{{ $post->tag }}</a>
            </div>
         
            <div>
                @if($post->isFavoritedBy(Auth::user()))
                  <a href="{{ route('posts.favorite', $post->post_id) }}" class="btn text-favorite">Liked! ❤︎</a>
                @else
                  <a href="{{ route('posts.favorite', $post->post_id) }}" class="btn text-favorite">♡</a>
                @endif
            </div>
          </div>
     @endforeach
     </div>
          </div>
    </table>
 @endsection