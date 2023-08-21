@extends('layouts.app')
@section('title', 'Edit Motorbike')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Motorbike</h1>
      <form action="/motorbikes/{{ $motorbike->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Brand</label>
          <input type="text" class="form-control" name="brand" placeholder="Enter brand" value="{{$motorbike->brand}}">
        </div>
        <div class="form-group">
          <label>Owner</label>
          <input type="text" class="form-control" name="owner" placeholder="Enter owner" value="{{$motorbike->owner}}">
        </div>
        <div class="form-group">
          <label>Year</label>
          <input type="text" class="form-control" name="year" placeholder="Enter year" value="{{$motorbike->year}}">
        </div>
        <div class="form-group">
          <label>Color</label>
          <input type="text" class="form-control" name="color" placeholder="Enter color" value="{{$motorbike->color}}">
        </div>
        <div class="form-group">
          <label>Plate</label>
          <input type="text" class="form-control" name="plate" placeholder="Enter plate" value="{{$motorbike->plate}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection