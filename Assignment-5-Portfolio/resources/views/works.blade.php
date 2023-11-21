@extends('welcome')

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Company</th>
        <th scope="col">Designation</th>
        <th scope="col">Experience</th>
        <th scope="col">Role</th>
        <th scope="col">Period</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($works as $work)
        <tr>
          <th scope="row">1</th>
          <td>{{ $work['id'] }}</td>
          <td>{{ $work['company'] }}</td>
          <td>{{ $work['designation'] }}</td>
          <td>{{ $work['experience'] }}</td>
          <td>{{ $work['role'] }}</td>
          <td>{{ $work['period'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection