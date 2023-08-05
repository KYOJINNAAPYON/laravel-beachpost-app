@extends('layouts.app')
 
 @section('content')
 <table>
     <div class="container mt-4">
         <h2>All Liked Posts</h2>

             @foreach ($favorites as $fav)

              <div class="row">
                <div class="post">
                  <div class="col-md-7 mt-2">
                    <div class="d-inline-flex">
                     <a href="{{route('posts.show', $fav->favoriteable_id)}}" class="w-70">
                      <img src="{{ asset('img/IMG_01.jpg')}}" class="img-thumbnail">
                     </a>
                      <div class="container mt-3">
                        <h5 class="w-100">{{App\Models\Post::find($fav->favoriteable_id)->title}}</h5>
                        <h6 class="w-100">{{App\Models\Post::find($fav->favoriteable_id)->content}}</h6>
                        <h6 class="w-100">{{App\Models\Post::find($fav->favoriteable_id)->category_id}}</h5>
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
