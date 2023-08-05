@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4 post_create">
      <div>
        <h3>Add New Post</h2>
      </div>
  
          <form action="{{ route('posts.store') }}" method="POST">
          @csrf
  
          <div class="mt-4 mb-4">
          <strong>Title:</strong>
          <input type="text" name="title" placeholder="Title" class="form-control">
          </div>
          <div class="mb-4">
          <strong>Content:</strong>
          <textarea class="form-control" name="content" placeholder="Content"></textarea>
          </div>
          <div class="mb-4">
          <strong>Tag:</strong>
          <input type="text" name="tag" placeholder="#Tag"  class="form-control">
          </div>
          <div class="mb-4">
          <strong>Category:</strong>
          <select name="category_id">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}" class="form-control">{{ $category->name }}</option>
          @endforeach
          </select>
          </div>
          <div class="mb-5">
          <label for="formFile" class="form-label">Image</label>
          <input class="form-control"  name="image" type="file" id="formFile">
          </div>
      <div>
        <button type="submit">Submit</button>
      </div>
        </form>
      </div>
  </table>
    
    
<div>
    <a href="('posts.index')"> Back</a>
</div>


@endsection