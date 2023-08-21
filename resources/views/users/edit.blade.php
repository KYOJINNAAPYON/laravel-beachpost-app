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
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="prefecture_id" class="text-md-left">Prefecture</label>
                     </div>
                     <!-- <div class="collapse editUserPrefecture">
                         <select name="prefecture_id" id="prefecture_id" class="col-md-6" class="form-control" required autocomplete="prefecture" autofocus placeholder="">
                         @foreach ($prefectures as $prefecture)
                            @if ($prefecture->id == $user->prefecture_id)
                            <option value="{{ $prefecture->id }}" selected>{{ $prefecture->name }}</option>
                            @else
                            <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                            @endif
                         @endforeach
                         </select>
                     </div> -->
                     <div class="collapse show editUserMail">
                         <select name="prefecture_id" class="form-control" name="prefecture" value="{{ $user->prefecture->name }}" required autocomplete="prefecture" autofocus placeholder="prefecture">
                         @foreach ($prefectures as $prefecture)
                            @if ($prefecture->id == $user->prefecture_id)
                            <option value="{{ $prefecture->id }}" selected>{{ $prefecture->name }}</option>
                            @else
                            <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                            @endif
                         @endforeach
                         </select>
                         
                     </div>
                 </div>
                 <br>
                 <hr>
                 <button type="submit" class="btn btn-primary mt-3 w-25">
                     保存
                 </button>
             </form>
         </div>
     </div>
 </div>
 @endsection