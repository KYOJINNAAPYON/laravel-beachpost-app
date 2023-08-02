<div>
     <h2> Show Posts</h2>
 </div>
 <div>
     <a href="{{ route('posts.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>Title:</strong>
     {{$post->title}}
 </div>
 
 <div>
     <strong>Content:</strong>
     {{$post->content}}
 </div>
 
 <div>
     <strong>Tag:</strong>
     {{$post->tag}} 
 </div>

 <div>
     <strong>Image:</strong>
     {{$post->image}} 
 </div>

 <div>
     <strong>Category:</strong>
     {{$post->category_id}} 
 </div>