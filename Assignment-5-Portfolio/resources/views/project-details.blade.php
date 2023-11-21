@extends('welcome')

@section('content')
  @if($project)
    <table class="table table-borderless">
      <tbody>
        <tr>
          <th>ID</th>
          <td>{{ $project['id'] }}</td>
        </tr>
        <tr>
          <th>Title</th>
          <td>{{ $project['title'] }}</td>
        </tr>
        <tr>
          <th>Description</th>
          <td>{{ $project['description'] }}</td>
        </tr>
      </tbody>
    </table>
  @else
    <h1>No project found with this ID.</h1>
  @endif
  <div>
    <a href="{{ route('projects') }}" class="btn btn-primary btn-sm active">Back</a>
  </div>
@endsection