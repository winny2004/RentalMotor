@extends('layouts.app')
@section('title', 'Owner')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Owners</h1>
      <p>
        <a href="{{ route('owners.create') }}" class="btn btn-success">Add New Owner</a>
        <a href="/motorbikes" class="btn btn-success">Back All Motorbike</a>

      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Idcard</th>
            <th>Room</th>
            <th>Birth</th>
          </tr>
        </thead>
        <tbody>
          @foreach($owners as $owner)
          <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->idcard }}</td>
            <td>{{ $owner->room }}</td>
            <td>{{ $owner->birth }}</td>
            <td>
              <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('owners.destroy', $owner->id) }}">
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

