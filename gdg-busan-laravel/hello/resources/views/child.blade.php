@extends('layouts/parent')

@section('style')
  <style>
    body {
      background: blue;
      color: white;
    }
  </style>
@stop

@section('content')
  <h3> This is child!! </h3>
  @include('layouts/footer')
@stop

@section('script')
  <script>
    alert("Hello Blade~ ^^/");
  </script>
@stop
