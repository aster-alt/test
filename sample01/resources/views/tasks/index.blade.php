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
    <a href="{{ route('tasks.new') }}" class="btn btn-info" role="button">新規作成</a>
    <table class="table table-hover">
    <thead>
        <tr>
        <th>タイトル</th>
        <th>コメント</th>
        <th>編集</th>
        <th>削除</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->comment }}</td>
            <td>
                <form action="{{ route('tasks.edit') }}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    <button type="submit" class="btn btn-default">編集</button>
                </form>
            </td>
            <td>
                <form action="{{ route('tasks.delete') }}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    <button type="submit" class="btn btn-default">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
 
</body>
</html>