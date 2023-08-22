@extends('layouts.app')
@section('title', 'Edit Owner')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Owner</h1>
      <form action="/owners/{{ $owners->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$owners->name}}">
        </div>
        <div class="form-group">
          <label>Idcard</label>
          <input type="text" class="form-control" name="idcard" placeholder="Enter idcard" value="{{$owners->idcard}}">
        </div>
        <div class="form-group">
          <label>Room</label>
          <input type="text" class="form-control" name="room" placeholder="Enter room" value="{{$owners->room}}">
        </div>
        <div class="form-group">
          <label>Birth</label>
          <input type="text" class="form-control" name="birth" placeholder="Enter birth" value="{{$owners->birth}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection