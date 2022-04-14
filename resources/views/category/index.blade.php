@extends('layouts.main')
@section('title') Список категорий @endsection
@section('content')
  @foreach($categoryList as $category)
    <div class="col">
      <h3>
        <a href="{{ route('category.show', ['id' => $category['id']]) }}">
          {{ $category['name'] }}
        </a>
        <hr/>
      </h3>
    </div>
  @endforeach
@endsection