@extends('layouts.app')
 
 @section('content')
 <div class="container d-flex justify-content-center mt-3">
     <div class="w-50">
         <h1>My Page</h1>
 
         <hr>
 
         <div class="container">
                 <div class="row">
                    <div class="col-9 d-flex ms-2 mt-3 mb-3">
                     <a href="{{route('mypage.edit')}}">Edit My Account</a>
                    </div>
                 </div>
         </div>
 
         <hr>
 
         <div class="container">
                 <div class="row">
                    <div class="col-9 d-flex ms-2 mt-3 mb-3">
                     <a href="{{route('myposts')}}">All My Posts</a>
                    </div>
                 </div>
         </div>
 
         <hr>

         <div class="container">
                 <div class="row">
                    <div class="col-9 d-flex ms-2 mt-3 mb-3">
                     <a href="{{ route('mypage.favorite') }}">Liked Posts</a>
                    </div>
                 </div>
         </div>
 
         <hr>
 
         <div class="container">
             <div class="row">
                 <div class="col-9 d-flex ms-2 mt-3 mb-3">
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         Logout
                     </a>
 
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </div>
         </div>

         <hr>
      </div>
    </div>
 </div>
 @endsection