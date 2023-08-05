@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4">
      <div>
        <h2>Edit Post</h2>
      </div>
        <div class="col-12">
          <div class="row">
          <div class="post">

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div class="mt-4 mb-4">
         <strong>Title:</strong>
         <input type="text" name="title" value="{{ $post->title }}" placeholder="Name" class="form-control">
     </div>
     <div class="mb-4">
         <strong>Content:</strong>
         <textarea class="form-control" name="content" placeholder="description">{{ $post->content }}</textarea>
     </div>
     <div class="mb-4">
         <strong>Tag:</strong>
         <input type="text" name="tag" placeholder="#Tag" value="{{ $post->tag }}" class="form-control">
     </div>
     <div class="mb-4">
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
             @if ($category->id == $post->category_id)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endif
         @endforeach
         </select>
     </div>
     <div class="mb-4">
          <label for="formFile" class="form-label">Image</label>
          <input class="form-control"  name="image" type="file" id="formFile">
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
    </form>
  </div>
  <div class="mb-4">
     <a href="{{ route('posts.index') }}"> Back</a>
    </div>
</table>
@endsection