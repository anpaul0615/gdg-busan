@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h3>
      <a href="{{ route('articles.index') }}">자유게시판</a>
      <small> / 글목록</small>
    </h3>
  </div>

  <div class="text-right action__article">
    <a href="{{ route('articles.create') }}" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      글쓰기
    </a>
  </div>

  <article>
    @forelse($articles as $article)
      @include('articles.partial.article', compact('article'))
    @empty
      <p class="text-center text-danger">
        글이 없습니다.
      </p>
    @endforelse
  </article>

  @if($articles->count())
    <div class="text-center paginator__article">
      {!! $articles->appends(request()->except('page'))->render() !!}
    </div>
  @endif
@stop