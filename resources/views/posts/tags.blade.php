@extends('layouts.app')

 @section('content')
 <table>
     <div class="container mt-4">
         <h2>{{$post->tag}}</h2>

             @foreach ($tags as $tag)

              <div class="row">
                <div class="post">
                  
                    <div class="d-inline-flex">
                    <div class="col m-3">
                     <a href="{{route('posts.show', $fav->favoriteable_id)}}" class="w-70">
                      <img src="{{  asset(App\Models\Post::find($fav->favoriteable_id)->image) }}" width="80%" class="d-block mx-auto">
                     </a>
                     <div class="col m-5">
                        <div class="col"><h5>{{App\Models\Post::find($fav->favoriteable_id)->title}}</h5></div>
                        <div class="col div-pre w-75">{{App\Models\Post::find($fav->favoriteable_id)->content}}</div>
                        <h6 class="col">{{App\Models\Post::find($fav->favoriteable_id)->category->name}}</h6>
                     </div>
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-2"></div>
                    <div class="col-2">
                      → <a href="{{ route('posts.favorite', $fav->favoriteable_id) }}" class="">Unliked</a>
                    </div>
                  </div>
               
              </div>
            </div>
             @endforeach
    </div>
 </table>
 @endsection