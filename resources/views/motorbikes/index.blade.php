@extends('layouts.app')
@section('title', 'Motorbikes')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Motorbikes</h1>
      <p>
        <a href="/motorbikes/create" class="btn btn-success">Add New Motorbike</a>
        <a href="/brands" class="btn btn-success">Brand</a>
        <a href="/colors" class="btn btn-success">Color</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Owner</th>
            <th>Color</th>
            <th>Year</th>
            <th>Plate</th>
          </tr>
        </thead>
        <tbody>
          @foreach($motorbikes as $motorbike)
          <tr>
            <td>{{ $motorbike->id }}</td>
            <td>{{ $motorbike->brand->name }}</td>
            <td>{{ $motorbike->owner->name }}</td>
            <td>{{ $motorbike->color->name }}</td>
            <td>{{ $motorbike->year }}</td>
            <td>{{ $motorbike->plate }}</td>
            <td>
              <a href="{{ route('motorbikes.show', $motorbike->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('motorbikes.edit', $motorbike->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('motorbikes.destroy', $motorbike->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>