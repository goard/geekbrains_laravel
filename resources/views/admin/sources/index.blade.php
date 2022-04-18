@extends('layouts.admin')
@section('title') Источник новостей @parent @endsection
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Источник новостей</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{ route('admin.sources.create') }}" class="btn btn-sm btn-outline-secondary">Добавить источник новости</a>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    @include('inc.messages')
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Название</th>
          <th>Источник новости</th>
          <th>Дата новости</th>
        </tr>
      </thead>
      <tbody>
        @forelse($sourcesNewsList as $element)
          <tr>
            <td>{{ $element->id }}</td>
            <td>{{ $element->title }}</td>
            <td>{{ $element->portalMedia }}</td>
            <td>{{ $element->freshNews }}</td>
            <td>
              <a href="{{ route('admin.sources.edit', $element) }}">
                Ред.
              </a>
              &nbsp;
              <a href="javascript:;" style="color:red">
                Удл.
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4">Записей нет</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    {{ $sourcesNewsList->links() }}
  </div>
@endsection