@extends('layouts.app')

@section('content')
<div class="page-header">
<h3><a href="{{ route('articles.index') }}">자유게시판</a>
    <small> / 글상세 / {{ $article->title }}</small>
</h3>
</div>

<article data-id="{{ $article->id }}">
    @include('articles.partial.article', compact('article'))
    <p>{{($article->content) }}</p>
</article>

<div class="text-center action__article">
    @can('delete', $article)
    <a id="btn-delete" href="#" class="btn btn-danger">
        <i class="fa fa-pencil"></i>글 삭제
    </a>
    @endcan

    @can('update', $article)
    <a id="btn-update" href="{{ route('articles.edit', $article->id) }}" class="btn btn-default">
        <i class="fa fa-pencil"></i>글 수정
    </a>
    @endcan

    <a href="{{ route('articles.index') }}" class="btn btn-default">
        <i class="fa fa-list"></i>글 목록
    </a>
</div>
@stop

@section('script')
<script>
    $('#btn-delete').on('click',function(e){
        var articleId = $('article').data('id');
        if(confirm('글을 삭제합니다.')){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'DELETE',
                url:'/articles/' + articleId
            }).then(function(){
                window.location.href = '/articles';
            });
        }
    })
</script>
@stop
