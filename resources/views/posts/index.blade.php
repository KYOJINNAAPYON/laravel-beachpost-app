<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>新規投稿</title>    
 </head>
 
 <body>
     <header>
         <nav>
             <div>                
                 <a href="{{ route('posts.index') }}">BeachApp</a>          
             </div>
         </nav>
     </header>
 
     <main>
         <article>
             <div>                
                 <h1>投稿一覧</h1>   
                 @if (session('flash_message'))
                     <p>{{ session('flash_message') }}</p>
                 @endif
 
                 <div>
                     <a href="{{ route('posts.create') }}">新規投稿</a>                                   
                 </div>

                 <div>
                     <a href="{{ route('posts.index') }}">&lt; 戻る</a>                                  
                 </div>
 
                 <form action="#" method="post">
                     @csrf
                     <div>
                         <label for="title">タイトル</label>
                         <input type="text" name="title">
                     </div>
                     <div>
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
                         <label for="content">本文</label>
                         <textarea name="content"></textarea>
                     </div>
                     <button type="submit">投稿</button>
                 </form>
             </div>
         </article>
     </main>
 
     <footer>        
         <p>&copy; BeachApp All rights reserved.</p>
     </footer>
 </body>
 
 </html>