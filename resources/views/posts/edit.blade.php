<div>
     <h2>Edit Post</h2>
 </div>
 <div>
     <a href="{{ route('posts.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('posts.update',$post->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>Title:</strong>
         <input type="text" name="title" value="{{ $post->title }}" placeholder="Name">
     </div>
     <div>
         <strong>Content:</strong>
         <textarea style="height:150px" name="content" placeholder="description">{{ $post->content }}</textarea>
     </div>
     <div>
         <strong>Tag:</strong>
         <input type="text" name="tag" placeholder="#Tag" value="{{ $post->tag }}">
     </div>
     <div>
         <strong>Image:</strong>
         <input type="number" name="image"  value="{{ $post->image }}">
     </div>
     <div>
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
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>