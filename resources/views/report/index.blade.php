@extends('layouts.main')
@section('title') Report @endsection
@section('header')
  <h4>Report</h4>
@endsection
@section('content')
  <div class="raw">
    <p>Получение выгрузки данных</p>
    @if($errors->any())
      @foreach($errors->all() as $error)
        <x-alert type="danger" :message="$error"></x-alert>
      @endforeach
    @endif
    <form method="post" action="{{ route('report.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="firstName">Имя заказчика</label>
        <input type="text" class="form-control" name="firstName" id="firstName" value="{{ old('firstName') }}"/>
      </div>
      <div class="form-group">
        <label for="phone">Номер телефона</label>
        <input type="phone" class="form-control" name="phone" id="phone" value="{{ old('phone') }}"/>
      </div>
      <div class="form-group">
        <label for="email">Email-адрес</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"/>
      </div>
      <div class="form-group">
        <label for="info">Информация заказа</label>
        <textarea class="form-control" name="info" id="info">{!! old('info') !!}</textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
  </div>
@endsection