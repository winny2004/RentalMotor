@extends('layouts.app')
@section('title', 'Add New Colors')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Color</h1>
      <form action="{{ route('colors.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <br/>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Add New Color</button>
      </form>
    </div>
  </div>

@endsection