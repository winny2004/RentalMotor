@extends('layouts.app')
@section('title', 'Details for ID ' )
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <p><a href="{'motorbikes.index'}">Back to all motorbikes</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $motorbikes->id }}</td>
          </tr>
          <tr>
            <th>Brand</th>
            <td>{{ $motorbikes->brand }}</td>
          </tr>
          <tr>
            <th>Model</th>
            <td>{{ $motorbikes->owner }}</td>
          </tr>
          <tr>
            <th>Year</th>
            <td>{{ $motorbikes->year }}</td>
          </tr>
          <tr>
            <th>Color</th>
            <td>{{ $motorbikes->color }}</td>
          </tr>
          <tr>
            <th>Plate</th>
            <td>{{ $motorbikes->plate }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection