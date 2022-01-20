@extends('layouts.admin')

@section('content')
<h1 class="text-center">All Posts </h1>
<div class="container">
<table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title post</th>
        <th scope="col">Description</th>
        <th scope="col">control</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as$post )
            
      
      <tr>
        <th scope="row">1</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->description }}</td>

        
        <td class="d-flex align-items-baseline">
            {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">show</a> --}}
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            {{-- <a href="" class="btn btn-danger">Delete</a> --}}
            <form method="post" action="{{ route('posts.destroy', $post->id) }}">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a>

</div>
@endsection