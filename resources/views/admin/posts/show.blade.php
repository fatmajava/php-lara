@extends('layouts.admin')

@section('content')
<h1 class="text-center">{{ $user->name }} Posts </h1>
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
        @foreach ($user_posts as $post )
            
      
      <tr>
        <th scope="row">1</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->description }}</td>
        <td class="d-flex-baseline">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
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