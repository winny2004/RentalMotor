@extends('layouts.app')
@section('title', 'Add New Owner')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Owner</h1>
      <form action="{{ route('owners.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label>Idcard</label>
          <input type="text" class="form-control" name="idcard" placeholder="Enter idcard">
        </div>
        <div class="form-group">
          <label>Room</label>
          <input type="text" class="form-control" name="room" placeholder="Enter room">
        </div>
        <div class="form-group">
          <label>Birth</label>
          <input type="text" class="form-control" name="birth" placeholder="Enter birth">
        </div>

        <button type="submit" class="btn btn-primary">Add New Owner</button>
      </form>
    </div>
  </div>
    
@endsection