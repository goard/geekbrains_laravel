@extends('layouts.main')
@section('title') About @endsection
@section('header')
  <h4>About</h4>
@endsection
@section('content')
  <p>Первое веб приложение реализованное на фреймворке laravel</p>
  <div class="raw">
    <p>Обратная связь</p>
    @if($errors->any())
      @foreach($errors->all() as $error)
        <x-alert type="danger" :message="$error"></x-alert>
      @endforeach
    @endif
    <form method="post" action="{{ route('about.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="firstName">Имя</label>
        <input type="text" class="form-control" name="firstName" id="firstName" value="{{ old('firstName') }}"/>
      </div>
      <div class="form-group">
        <label for="comment">Комментарий</label>
        <textarea class="form-control" name="comment" id="comment">{!! old('comment') !!}</textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
  </div>
@endsection