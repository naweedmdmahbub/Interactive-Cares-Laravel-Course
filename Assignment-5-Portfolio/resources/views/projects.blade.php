@extends('welcome')

@section('content')
  @php
    //  dd('projects');
  @endphp
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
        <tr>
          <td>{{ $project['id'] }}</td>
          <td>{{ $project['title'] }}</td>
          <td>{{ $project['description'] }}</td>
          <td>
            <a href="{{ route('projects.show',$project['id']) }}" class="btn btn-primary active" role="button" aria-pressed="true">Show</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection