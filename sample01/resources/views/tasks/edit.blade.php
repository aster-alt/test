<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container-fluid">
    <form action="{{ route('tasks.renew') }}" method="post"> 
    @csrf
    <div class="form-group">
        <label for="text">タイトル:</label>
        <input name="title" type="text" class="form-control" id="text" value="{{ $task->title }}">
        <label for="text">コメント:</label>
        <input name="comment" type="text" class="form-control" id="text" value="{{ $task->comment }}">
    </div>
    <input type="hidden" name="id" value="{{ $task->id }}">
    <button type="submit" class="btn btn-default">作成</button>
    </form>
</div>
 
</body>
</html>