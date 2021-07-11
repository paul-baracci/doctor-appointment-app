@extends('app')

@section('content')
<div class="container text">
  <h1 class="text-center">Our Blog</h1>

  <div class="row justify-content-center">
    {{ $articles->links() }}
  </div>
  @foreach($articles as $article)
          <div class="shadow card flex-row mb-2">
            <img class="thumbnail" src="img/hero3.jpg">
            <div class="card-body">
              <h3 class="mb-1"><a href="/article/{{ $article->id }}">{{ $article->article_title }}</a></h3>
              <div class="mb-1 text-muted"> <strong>Published </strong>{{ $article->created_at->diffForHumans() }} by {{ $article->doctor->name }}, {{ $article->comments->count() }} comments</div>
              <p class="card-text mb-auto">{{ $article->article_description }}</p>
              <p class="card-text mb-auto">category: <a href="/category/{{ $article->category_id }}"> {{ $article->category->name }} </a></p>
              <p class="card-text mb-auto">tags:
                @foreach($article->tags as $tag)
                  <a href="/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                @endforeach
              </p>
            </div>
          </div>
  @endforeach

  <div class="row m-2 justify-content-center">
    {{ $articles->links() }}
  </div>
</div>

@endsection
