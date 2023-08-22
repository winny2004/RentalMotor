@extends('layouts.app')
@section('title', 'Details for ID ')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <p><a href="/owners/index">Back to all owners</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $owners->id }}</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>{{ $owners->name }}</td>
          </tr>
          <tr>
            <th>Idcard</th>
            <td>{{ $owners->idcard}}</td>
          </tr>
          <tr>
            <th>Room</th>
            <td>{{ $owners->room}}</td>
          </tr>
          <tr>
            <th>Birth</th>
            <td>{{ $owners->birth }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection