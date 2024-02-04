<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    @cloudinaryJS
  </head>
  <a href="{{ asset('storage/orange.png')}}" class="img-thumbnail">アップロードファイル</a>
  <body>
    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
      {{ csrf_field() }}

      <input type="file" id="file" name="file" class="form-control" />

      <button type="submit">アップロード</button>
    </form>
  </body>
</html>