@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h3>
      <a href="{{ route('articles.index') }}">자유게시판</a>
      <small> / 글쓰기</small>
    </h3>
  </div>

  <form action="{{ route('articles.store') }}" method="POST">
    {!! csrf_field() !!}

    @include('articles.partial.form')

    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">
        저장하기
      </button>
    </div>
  </form>
@stop