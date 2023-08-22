@extends('layouts.app')
@section('title', 'Details for ID ' . $color->name)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for {{ $color->name }}</h1>
      <p><a href="{{ route('colors.index') }}">Back to all colors</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $color->id }}</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>{{ $color->name }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection