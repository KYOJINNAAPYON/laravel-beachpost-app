@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <span>
                 <a href="{{ route('mypage') }}">My Page</a> > Edit My Account
             </span>
 
             <h1 class="mt-3 mb-3">Edit My Account</h1>
             <hr>
 
             <form method="POST" action="{{ route('mypage') }}">
                 @csrf
                 <input type="hidden" name="_method" value="PUT">
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="name" class="text-md-left">Name</label>
                     </div>
                     <div class="collapse show editUserName">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Name">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>Please enter your Name</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="email" class="text-md-left">Email</label>
                     </div>
                     <div class="collapse show editUserMail">
                         <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="beachapp@sample.com">
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>Please enter your Email</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <!-- <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="postal_code" class="text-md-left">Prefecture</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ $user->postal_code }}" required autocomplete="postal_code" autofocus placeholder="prefecture">
                         @error('postal_code')
                         <span class="invalid-feedback" role="alert">
                             <strong>Please select your Prefecture</strong>
                         </span>
                         @enderror
                     </div>
                 </div> -->
                 <br>
                 <hr>
                 <button type="submit" class="btn mt-3 w-25">
                     保存
                 </button>
             </form>
         </div>
     </div>
 </div>
 @endsection