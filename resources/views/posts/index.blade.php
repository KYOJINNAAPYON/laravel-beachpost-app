<a href="{{ route('posts.create') }}"> Create New Product</a>
 
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
         <td>
             <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
              <a href="{{ route('posts.show',$post->id) }}">Show</a>
              <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
             </form>
         </td>
     </tr>
     @endforeach
 </table>