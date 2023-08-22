@extends('layouts.app')
@section('title', 'Add New Car')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Car</h1>
      <form action="{'cars.store'}" method="POST">
        @csrf
               <div class="form-group">
          <div class="mb-3">
            <label for="" class="form-label">Owner</label>
            <select class="form-select form-select-lg" name="owner" id="owner">
              @foreach ($brands as $brand)
              <option value="{{ $owner->id }}">{{ $owner->name }}</option>
              @endforeach
            </select>
            
            <div class="form-group">
          <div class="mb-3">
            <label for="" class="form-label">Brand</label>
            <select class="form-select form-select-lg" name="brand_id" id="brand_id">
              @foreach ($brands as $brand)
              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <label for="color">Color</label>
    <select name="color[]" id="color" multiple>
        @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>
 
        <div class="form-group">
          <label>Year</label>
          <input type="text" class="form-control" name="year" placeholder="Enter year">
        </div>

        <div class="form-group">
          <label>Plate</label>
          <input type="text" class="form-control" name="plate" placeholder="Enter plate">
        </div>
        
        <button type="submit" class="btn btn-primary">Add New Car</button>
      </form>
    </div>
  </div>
    
@endsection

   