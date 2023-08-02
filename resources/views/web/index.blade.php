@extends('layouts.app') 
 
 @section('content')
 <a href="{{ route('login') }}"> Create New Post</a>
 
 <table>
     <tr>
         <th>Tittle</th>
         <th>Content</th>
         <th>Tag</th>
         <th>Category ID</th>
         <th>Image</th>
     </tr>
     @foreach ($posts as $post)
     <tr>
         <td>{{ $post->title }}</td>
         <td>{{ $post->content }}</td>
         <td>{{ $post->tag }}</td>
         <td>{{ $post->category_id }}</td>
         <td>{{ $post->image }}</td>
     </tr>
     @endforeach
 </table>
 @endsection