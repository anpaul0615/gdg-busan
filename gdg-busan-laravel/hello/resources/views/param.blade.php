<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
</head>
<body>

  <h1>Hello Laravel..!</h1>
  <hr/>

  {{-- '주석입니다 1' --}}
  <!-- {{ '주석입니다 2' }} -->

  @if( !empty($data) )
  <h3>{{ $data }}</h3>
  @else
  <h3>$data is nothing</h3>
  @endif
  @if( !empty($data2) )
  <h3>{{ $data2 }}</h3>
  @else
  <h3>$data2 is nothing</h3>
  @endif
  @if( !empty($data3) )
  <h3>{{ $data3 }}</h3>
  @else
  <h3>$data3 is nothing</h3>
  @endif
  <hr/>


  @if( !empty($dataList) )
  <ul>
    @foreach($dataList as $item)
    <li>{{ $item }}</li>
    @endforeach
  </ul>
  @else
  <h3>$dataList is nothing</h3>
  @endif
  <hr/>

</body>
</html>
