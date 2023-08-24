@extends('layouts.app')
@section('title', 'Details' )
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
    <h1>Details for Motorbike</h1>
      <p><a href="/motorbikes">Back to all motorbikes</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $motorbikes->id }}</td>
          </tr>
          <tr>
            <th>Brand</th>
            <td>{{ $motorbikes->brand->name }}</td>
          </tr>
          <tr>
            <th>Model</th>
            <td>{{ $motorbikes->owner->name }}</td>
          </tr>
          <tr>
            <th>Year</th>
            <td>{{ $motorbikes->year }}</td>
          </tr>
          <tr>
            <th>Color</th>
            <td> @foreach($motorbikes->colors as $color)
                    <a href="/colors/{{$color->id}}">{{ $color->name }}</a>
                @endforeach</td>
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