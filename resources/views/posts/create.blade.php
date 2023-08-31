@extends('layouts.app') 
 
 @section('content')
 
 <table>
     <div class="container mt-4 post_create">
      <div>
        <h3>Add New Post</h2>
      </div>
  
          <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
  
          <div class="mt-4 mb-4">
          <strong>Title:</strong>
          <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="form-control">
          </div>
          <div class="mb-4">
          <strong>Content:</strong>
          <textarea class="form-control" name="content" placeholder="Content">{{ old('content') }}</textarea>
          </div>
          <div class="mb-4">
          <strong>Tag:</strong>
          <input type="text" name="tag" placeholder="#Tag" value="{{ old('tag') }}" class="form-control">
          </div>
          <div class="mb-4">
          <strong>Category:</strong>
          <select name="category_id" class="form-control">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
          </select>
          </div>
          <div class="mb-5">
          @if ($errors->any())
                     <div>
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
          @endif
            <input type="file" id="image" name="image" class="form-control" />

              <button type="submit">upload</button>
          </form>
          </div>
      
        </form>
      </div>
  </table>
    
    
<div>
    <a href="('posts.index')"> Back</a>
</div>


@endsection