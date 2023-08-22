@extends('layouts.app')
@section('title', 'colors')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Colors</h1>
      <p>
        <a href="{{ route('colors.create') }}" class="btn btn-success">Add New color</a>
        <a href="/motorbikes" class="btn btn-success">Back All Motorbike</a>

      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Color</th>
          </tr>
        </thead>
        <tbody>
          @foreach($colors as $color)
          <tr>
            <td>{{ $color->id }}</td>
            <td>{{ $color->name }}</td>
          
            <td>
              <a href="{{ route('colors.show', $color->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('colors.destroy', $color->id) }}">
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