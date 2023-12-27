<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
</head>
<body>

  <h1>hello</jh1>

  @if( !empty($data) )
    <h3>{{ $data }}</h3>
  @else
    <h3>$data is nothing</h3>
  @endif

  <hr>

  @if( !empty($dataList) )
    <ul>
    @foreach($dataList as $dl)
    <li>{{ json_encode($dl) }}</li>
    @endforeach
    </ul>
  @else
    <h3>$dataList is nothing</h3>
  @endif

</body>
</html>
