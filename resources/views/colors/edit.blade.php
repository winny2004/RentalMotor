@extends('layouts.app')
@section('title', 'Edit color')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit color</h1>
      <form action="/colors/{{ $color->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$color->name}}">
        </div>
        
      </form>
    </div>
  </div>

@endsection