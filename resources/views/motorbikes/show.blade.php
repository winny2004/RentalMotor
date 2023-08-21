@extends('layouts.app')
@section('title', 'Details for ID ' . $motorbike->id)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for ID {{ $motorbike->id }}</h1>
      <p><a href="{{ route('motorbikes.index') }}">Back to all motorbikes</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $motorbike->id }}</td>
          </tr>
          <tr>
            <th>Brand</th>
            <td>{{ $motorbike->brand }}</td>
          </tr>
          <tr>
            <th>Model</th>
            <td>{{ $motorbike->owner }}</td>
          </tr>
          <tr>
            <th>Year</th>
            <td>{{ $motorbike->year }}</td>
          </tr>
          <tr>
            <th>Color</th>
            <td>{{ $motorbike->color }}</td>
          </tr>
          <tr>
            <th>Plate</th>
            <td>{{ $motorbike->plate }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection