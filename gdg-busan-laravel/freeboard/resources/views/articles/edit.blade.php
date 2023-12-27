@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h3>
      <a href="{{ route('articles.index') }}">자유게시판</a>
      <small> / 글수정 / {{ $article->title }}</small>
    </h3>
  </div>

  <form action="{{ route('articles.update', $article->id) }}" method="POST">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

    @include('articles.partial.form')

    <div class="form-group text-center">
      <button type="submit" class="btn btn-default">
        수정하기
      </button>
      <a href="{{ route('articles.show', $article->id) }}" class="btn btn-default">
        취소
      </a>
    </div>
  </form>
@stop