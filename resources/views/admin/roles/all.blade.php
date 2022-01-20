@extends('layouts.admin')

@section('content')
<h1 class="text-center">All Roles </h1>
<div class="container">
<table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        
        <th scope="col">Control</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($roles as$role )
            
      
      <tr>
        <th scope="row">1</th>
        <td>{{ $role->name }}</td>
        
        
        <td class="d-flex align-items-baseline">
            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info">show users</a>
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>
            {{-- <a href="" class="btn btn-danger">Delete</a> --}}
            <form method="post" action="{{ route('roles.destroy', $role->id) }}">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>

</div>
@endsection