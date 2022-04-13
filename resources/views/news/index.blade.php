@extends('layouts.main')
@section('header')
<div class="row py-lg-5">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light">Список новостей</h1>
  </div>
</div>
@endsection
@section('content')
  @forelse($newsList as $news)
    <div class="col">
      <div class="card shadow-sm">
        <img src="<?=$news['image']?>"/>
        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
        <div class="card-body">
          <strong>
            <a href="{{ route('news.show', ['id' => $news['id']]) }}">
              {{ $news['title'] }}
            </a>
          </strong>
          <p class="card-text">
            {!! $news['description'] !!}
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="{{ route('news.show', ['id' => $news['id']]) }}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
            </div>
            <small class="text-muted">
              Автор: <em>{{ $news['author'] }}</em>
            </small>
            <small class="text-muted">
              Статус: <em>{{ $news['status'] }}</em>
            </small>
          </div>
        </div>
      </div>
    </div>
  @empty
    <h3>Новостей нет</h3>
  @endforelse
@endsection
