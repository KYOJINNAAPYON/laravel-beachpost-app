<div>
    <h2>Add New Post</h2>
</div>
<div>
    <a href="{{ route('posts.index') }}"> Back</a>
</div>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
  
    <div>
        <strong>Title:</strong>
        <input type="text" name="title" placeholder="Title">
    </div>
    <div>
        <strong>Content:</strong>
        <textarea style="height:150px" name="content" placeholder="Content"></textarea>
    </div>
    <div>
        <strong>Tag:</strong>
        <input type="text" name="tag" placeholder="#Tag">
    </div>
     <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
         <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endforeach
         </select>
     </div>
    <div>
        <button type="submit">Submit</button>
    </div>
   
</form>