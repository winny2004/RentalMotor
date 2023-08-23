@extends('layouts.app')
@section('title', 'Edit Motorbike')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Motorbike</h1>
      <a href="/motorbikes" class="btn btn-success">Back All Motorbike</a>
      <form action="/motorbikes/{{ $motorbikes->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="brand_id">Brand</label>
    <select name="brand_id" id="brand_id">
        @foreach($brands as $brand)
            <option value="{{$brand->id}}" >{{$brand->name}}</option>
        @endforeach
    </select>
    <br>
        <label for="owner_id">Owner</label>
    <select name="owner_id" id="owner_id">
        @foreach($owners as $owner)
            <option value="{{$owner->id}}" >{{$owner->name}}</option>
        @endforeach
    </select>
    <br>
        <div class="form-group">
          <label>Year</label>
          <input type="text" class="form-control" name="year" placeholder="Enter year" value="{{$motorbikes->year}}">
        </div>
        <br>  
        <label for="colors">Color</label>
    <select name="colors[]" id="colors" multiple>
        @foreach($colors as $color)
            <option value="{{$color->id}}" >{{$color->name}}</option>
        @endforeach
    </select>
    <br>
        <div class="form-group">
          <label>Plate</label>
          <input type="text" class="form-control" name="plate" placeholder="Enter plate" value="{{$motorbikes->plate}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection