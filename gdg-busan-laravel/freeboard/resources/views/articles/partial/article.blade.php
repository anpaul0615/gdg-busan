<div class="media">

  <div class="media-body">
    <h4 class="media-heading">
      <a href="{{ route('articles.show', $article->id) }}">
        {{ $article->title }}
      </a>
    </h4>

    <p class="text-muted meta__article">
      <a href="#">
        <i class="fa fa-user"></i> {{ $article->user->name }}
      </a>

      <small>
        / {{ $article->created_at->diffForHumans() }}
      </small>
    </p>
  </div>
</div>