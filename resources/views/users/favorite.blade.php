@extends('layouts.app')
 
 @section('content')
 <table>
     <div class="container mt-4">
         <h2>All Liked Posts</h2>

             @foreach ($favorites as $fav)

            <div class="container">
             <div class="row">
                <div class="post">
                  <div class="col-md-10 mt-2">
                    <div class="d-inline-flex">
                      <div class="col m-3">
                        <a href="{{route('posts.show', $fav->favoriteable_id)}}" class="w-70">
                        <img src="{{ asset(App\Models\Post::find($fav->favoriteable_id)->image)}}" width="80%" class="d-block mx-auto">
                        </a>
                      </div>
                      <div class="col-8 m-3">
                        <div class="col"><h5 class="w-100">{{App\Models\Post::find($fav->favoriteable_id)->title}}</h5></div>
                        <div class="col"><h6 class="w-100"><div class="div-pre w-75">{{App\Models\Post::find($fav->favoriteable_id)->content}}</div></h6></div>
                        <h6 class="w-100">{{App\Models\Post::find($fav->favoriteable_id)->category->name}}</h5>
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
              </div>
            
             @endforeach
     </div>
 </table>
 @endsection
