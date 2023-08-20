<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function mypage()
     {
        $user = Auth::user();
        $prefectures = Prefectures::all();
 
        return view('users.mypage', compact('user', 'prefectures'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();
        $prefectures = Prefectures::all();
 
        return view('users.edit', compact('user', 'prefectures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
 
        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->email = $request->input('email') ? $request->input('email') : $user->email;
        $user->prefecture_id = $request->input('prefecture_id') ? $request->input('prefecture_id') : $user->prefecture_id;
        $user->update();
 
         return to_route('mypage');
    }

    public function favorite()
     {
         $user = Auth::user();
 
         $favorites = $user->favorites(Post::class)->get();
 
         return view('users.favorite', compact('favorites'));
     }

}
