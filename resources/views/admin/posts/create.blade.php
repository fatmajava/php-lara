@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center">Create post</h1>
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" name="description">
               
            </div>

           
            <div class="mb-3">
                <select class="form-select"  name="user_id">
                    <option selected>select the user</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
            </div>
          
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
